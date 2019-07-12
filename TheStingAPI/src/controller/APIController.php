<?php
header("Content-Type:application/json");
require "../service/ProductService.php";

$fullPath = $_SERVER['REQUEST_URI'];
$request_method=$_SERVER["REQUEST_METHOD"];
$endpoint = substr($fullPath, strpos($fullPath, "?") + 1);

switch($request_method)
{
    case 'GET':
        if ($endpoint == "products")
            response(200, "Products Found", getProducts());
        else if(!empty($_GET["id"]))
        {
            $id=$_GET['id'];
            $product = getProduct($id);
            if(empty($product))
                response(200,"Product Not Found",NULL);
            else
                response(200,"Product Found",$product);
        }
        break;
    default:
        // Invalid Request Method
        response(400,"Invalid Request",NULL);
        break;
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
