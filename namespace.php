<?php

require_once "data/conflict.php";
require_once "data/helper.php";

$conflict1 = new \Data\One\conflict;

$conflict2 = new Data\Two\conflict;

echo Helper\APPLICATION . PHP_EOL;

Helper\Helpme();