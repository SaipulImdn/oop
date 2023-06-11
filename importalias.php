<?php

require_once "data/Conflict.php";
require_once "data/helper.php";

use Data\one\conflict as Conflict1;
use Data\Two\conflict as Conflict2;
use function Helper\Helpme as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();



help();

echo APP . PHP_EOL;
