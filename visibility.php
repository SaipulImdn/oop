<?php

require_once "data/product.php";

$product = new product("apel", 20000);

echo $product->getName() .PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new productdummy("Dummy", 10000);
$dummy->info();