<?php

require_once "data/space.php";

use Data\{shape, rectangle};


$shape = new shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new rectangle();
echo $rectangle->getparentcorner() . PHP_EOL;