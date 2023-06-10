<?php

class person
{
    const AUTHOR = "programmer";

    var string $name;
    var string $address;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address= $address;

    }

    function sayhello(?string $name) {
        if(is_null($name)){
            echo "Hi, my name is $this->name" .PHP_EOL;
        }else{
            echo "Hi $name, my name is $this->name" .PHP_EOL;
        }
    }
    function info()
    {
        echo "Author : "  .self::AUTHOR . PHP_EOL;  
    }

    function __destruct()
    {
        echo "object person $this->name is destroyed" . PHP_EOL;
    }

}