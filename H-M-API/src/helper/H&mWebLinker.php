<?php

function getWebsiteLink($router){
    $urlHead = "https://www2.hm.com/nl_nl/";
    $urlTail = "/shop-by-product/";
    $html = ".html";
    $url = "";
    if (strpos($router->endpoint,"heren") !== false)
        $url = $urlHead . "heren" . $urlTail;

    else if(strpos($router->endpoint,"dames") !== false)
        $url = $urlHead . "dames" . $urlTail;

    else if(strpos($router->endpoint,"divided") !== false)
        $url = $urlHead . "divided" . $urlTail;

    if ($router->id != "")
        $url = $url . $router->id;
    else
        $url = $url . "view-all";

    $url = $url . $html;

    return $url;
}