<?php
require "service/ProductService.php";
require "helper/ResponseHelper.php";

function redirectToEndpoint($requestMethod, $router){
    $endpoint = $router->endpoint;

    switch ($requestMethod) {
        case 'GET':
            if ($endpoint == "heren/{id}")
                return findItem(getProducts($router));

            else if ($endpoint == "dames/{id}")
                return findItem(getProducts($router));

            else if ($endpoint == "divided/{id}")
                return findItem(getProducts($router));

            else
                return invalidEndpoint();
            break;
        default:
            // Invalid Request Method
            return invalidRequesMethod();
            break;
    }
}