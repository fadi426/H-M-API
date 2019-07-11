<?php
require "../model/Product.php";
$products = [
    new Product("book",1, "This is a book!", 20),
    new Product("pen", 2, "This is a pen", 10),
    new Product("pencil", 3, "This is a pencil", 5),
];

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
