<?php

require_once "data/programmer.php";

$company = new company();
$company->programmer = new Backendprogrammer("syaiful");
var_dump($company);