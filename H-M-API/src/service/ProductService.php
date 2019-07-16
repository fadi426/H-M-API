<?php
require "model/Product.php";
require "model/Scraper.php";
require "helper/H&mWebLinker.php";

$products = [];

function pullProducts($router){
    global $products;

    //Assemble thee needed URL
    $hmUrl = getWebsiteLink($router);
    if ($hmUrl == "")
        return [];

    //Scrape the content from that URL
    $scraper = new Scraper($hmUrl);
    $products = $scraper->scrape();
}

//Get all the products from the productsArray
function getProducts($router){
    pullProducts($router);
    global $products;
    return $products;
}

//Find a product inside the products array
//function getProduct($router) {
//    foreach (getProducts($router) as $product){
//        if ($product->id == $router->id){
//            return $product;
//        }
//    }
//}
