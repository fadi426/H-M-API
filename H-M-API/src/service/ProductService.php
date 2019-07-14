<?php
require "../model/Product.php";
require "../model/Scraper.php";
require "../helper/H&mWebLinker.php";

$products = [];

function pullProducts($router){
    global $products;
    $hmUrl = getWebsiteLink($router);
    if ($hmUrl == "")
        return [];
    $scraper = new Scraper($hmUrl);
    $products = $scraper->scrape();
}

function getProducts($router){
    pullProducts($router);
    global $products;
    return $products;
}

function getProduct($router) {
    foreach (getProducts($router) as $product){
        if ($product->id == $router->id){
            return $product;
        }
    }
}
