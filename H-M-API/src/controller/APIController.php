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
            response(findItem(getProducts($router)));
        else if($endpoint == "products/{id}") {
            $product = getProduct($router);
            response(findItem($product));
        }
        else if($endpoint == "heren/{id}")
            response(findItem(getProducts($router)));

        else if($endpoint == "dames/{id}")
            response(findItem(getProducts($router)));

        else if($endpoint == "divided/{id}")
            response(findItem(getProducts($router)));

        else
            response(invalidEndpoint());
        break;
    default:
        // Invalid Request Method
        return response(invalidRequesMethod());
        break;
}
function response($r)
{
    header("HTTP/1.1 ".$r[0]);

    $response['status']= $r[0];
    $response['status_message']= $r[1];
    $response['data']= $r[2];

    $json_response = json_encode($response, JSON_UNESCAPED_SLASHES);
    echo "dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd";
}