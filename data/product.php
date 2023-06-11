<?php

class product 
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        Return $this->price;
    }
}

class productdummy extends product 
{
    public function info() {
        echo "name $this->name" .PHP_EOL;
    }
}