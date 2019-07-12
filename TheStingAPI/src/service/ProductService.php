<?php
require "../model/Product.php";
require "../model/TheStingScraper.php";


$scraper = new TheStingScraper("dsdsd");
$products = $scraper->scrape();

function getProducts(){
    global $products;
    return $products;
}

function getProduct($id) {
    foreach (getProducts() as $product){
        if ($product->id == $id){
            return $product;
        }
    }
}
