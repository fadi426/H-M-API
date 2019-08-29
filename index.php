<?php
header("Content-Type:application/json");
require "controller/APIController.php";
require "model/Router.php";

$fullPath = $_SERVER['REQUEST_URI'];
$requestMethod=$_SERVER["REQUEST_METHOD"];

$router = new Router($fullPath);
$router->getRouting();

response(redirectToEndpoint($requestMethod, $router));

function response($r)
{
    //Assemble the Json response
    header("HTTP/1.1 ".$r[0]);

    $response['status']= $r[0];
    $response['status_message']= $r[1];
    $response['data']= $r[2];

    $json_response = json_encode($response, JSON_UNESCAPED_SLASHES);
    echo $json_response;
}