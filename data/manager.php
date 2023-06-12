<?php

class manager {

    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager") {
        $this->name = $name;
        $this->title = $title;
    }
    
    function sayHello(string $name): void
    {
        echo " Hi $name, my name is maanager $this->name" . PHP_EOL;
    }

}

class VicePresident extends manager 
{
    public function __construct(string $name = "") {
        parent::__construct($name, "vp");
    }
    function sayHello(string $name): void {
        echo " Hi $name, my name is vp $this->name" . PHP_EOL;
    } 

}

class rumahtangga extends manager

{
    function sayHello(string $name): void {
        echo " Hi $name, my name is rumah tangga $this->name" .PHP_EOL;
    }
}