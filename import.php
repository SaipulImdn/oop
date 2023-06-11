<?php

require_once "data/Conflict.php";
require_once "data/helper.php";

use Data\one\conflict;
use function Helper\Helpme;
use const Helper\APPLICATION;

$conflict = new conflict();

Helpme();

echo APPLICATION . PHP_EOL;
