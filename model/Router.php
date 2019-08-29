<?php


class Router
{
    public $fullUrl;
    public $endpoint;
    public $id;

    function __construct($fullUrl)
    {
        $this->fullUrl = $fullUrl;
    }

    function getRouting() {
        $fullEndpoint = substr($this->fullUrl, strpos($this->fullUrl, "php/") + 4);

        //Return the full path if it doesnt contain a backslash
        if (strpos($fullEndpoint, "/") === false){
            $this->endpoint = $fullEndpoint;
            $this->id = "";
            return;
        }

        //Uses a regex to find the values for the endpoint including parameters
        preg_match('/(.*)((\/)(.*)$)/', $fullEndpoint, $output_array);
        $this->endpoint = $output_array[1] . $output_array[3] . "{id}";
        $this->id = $output_array[4];
    }
}