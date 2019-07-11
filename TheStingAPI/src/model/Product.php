<?php


class Product
{
    public $name;
    public $id;
    public $info;
    public $price;

    function __construct($name, $id, $info, $price){
        $this->name = $name;
        $this->id = $id;
        $this->info = $info;
        $this->price = $price;
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