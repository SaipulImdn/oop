<?php

require_once "data/person.php";

define("APPLICATION", "PROJECT_1");

const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo person::AUTHOR .PHP_EOL;