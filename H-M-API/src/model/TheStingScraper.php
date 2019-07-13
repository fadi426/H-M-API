<?php
require('../helper/simple_html_dom.php');
require_once ('../model/TheStingScraper.php');



class TheStingScraper
{
    public $url;

    function __construct($url)
    {
        $this->url = $url;
    }

    function scrape(){
        $url = ('https://www2.hm.com/nl_nl/heren/shop-op-item/jacks-jassen.html');
        $context = stream_context_create(array('http' => array('header' => 'User-Agent: Mozilla compatible')));
        $response = file_get_contents($url, false, $context);
        $html = str_get_html($response);


// creating an array of elements
        $products = [];

        $i = 0;
        $htmlContent = $html->find('.product-item');
        foreach ($htmlContent as $product) {

            // Find item image element
            $productImage = $product->find('.image-container')[0]->find('a')[0]->href;

            $itemDetails = $product->find('.item-details')[0];
            // Find item link element
            $productLink = "https://www2.hm.com" . $itemDetails->find('.link')[0]->href;

            // get product name
            $productName = $itemDetails->find('.link')[0]->plaintext;

            // get product price
            $productPrice = str_replace(' ', '', $itemDetails->find('.item-price')[0]->plaintext);

            // get product color
            $productColors = [];
            foreach ($itemDetails->find('li') as $color){
                $productColors[] = trim(preg_replace('/\t+/', '', $color->plaintext));
            }

            $p = new Product($i,$productImage,$productLink,$productName,$productPrice,$productColors);
            // push to a list of products
            $products[] = $p;

            $i++;
        }
        return $products;
    }
}