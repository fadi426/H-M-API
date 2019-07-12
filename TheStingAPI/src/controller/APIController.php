<?php
header("Content-Type:application/json");
require "../service/ProductService.php";
require "../model/Router.php";
require "../helper/ResponseHelper.php";


$fullPath = $_SERVER['REQUEST_URI'];
$request_method=$_SERVER["REQUEST_METHOD"];

$router = new Router($fullPath);
$router->getRouting();
$endpoint = $router->endpoint;

switch($request_method)
{
    case 'GET':
        if ($endpoint == "products")
            responseBuilder(getProducts());
        else if($endpoint == "products/{id}")
        {
            $id=$router->id;
            $product = getProduct($id);
            responseBuilder($product);
        }
        else
            responseBuilder();
        break;
    default:
        // Invalid Request Method
        response(400,"Invalid Request",NULL);
        break;
}
function responseBuilder($item){
    $r = findItem($item);
    response($r[0], $r[1], $r[2]);
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