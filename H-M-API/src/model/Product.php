<?php


class Product
{
    public $imageLink;
    public $link;
    public $name;
    public $price;
    public $colors = [];

    function __construct($imageLink, $link, $name, $price, $colors){
        $this->imageLink = $imageLink;
        $this->link = $link;
        $this->name = $name;
        $this->price = $price;
        $this->colors = $colors;
}

    public function __set($variableName,$value) {
        $functionname='set'.$variableName;
        return $this->$functionname($value);
    }
    public function __get($variableName) {
        $functionname='get'.$variableName;
        return $this->$functionname();
    }
}