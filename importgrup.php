<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\one\{conflict as conflict1, Dummy, Sample};
use function Helper\{Helpme};

$conflict1 = new conflict1();
$dummy = new Dummy();
$sample = new Sample();