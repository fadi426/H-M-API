<?php
header("Content-Type:application/json");
require "../service/ProductService.php";

$fullPath = $_SERVER['REQUEST_URI'];
$endpoint = substr($fullPath, strpos($fullPath, "?") + 1);
if ($endpoint == "products")
    response(200, "Products Found", getProducts());
else if(!empty($_GET['id']))
{
    $id=$_GET['id'];
    $product = getProduct($id);
    if(empty($product))
        response(200,"Product Not Found",NULL);
    else
        response(200,"Product Found",$product);
}
else
{
    response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
    header("HTTP/1.1 ".$status);

    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;

    $json_response = json_encode($response);
    echo $json_response;
}
