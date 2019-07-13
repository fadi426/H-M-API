<?php

function findItem($item){
    if (is_array($item)){
        if (count($item) == 0)
            return [200,"Product Not Found", NULL];
        else
            return [200, "Product Found", $item];
    }

    if(empty($item))
        return [200,"Product Not Found", NULL];
    else
        return [200, "Product Found", $item];
}

function invalidRequesMethod() {
    return [400,"Invalid Request",NULL];
}

function invalidEndpoint(){
    return [400,"Invalid Endpoint",NULL];
}

