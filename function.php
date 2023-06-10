<?php

require_once "data/person.php";

$ipul = new person("ipul", "cirebon");
$ipul->name = "syaiful";
$ipul->sayhello("imanudin");

$joko = new person("rio", "cideng");
$joko->name = "agus";
$joko->sayhello("ratno");


$joko->info();
$ipul->info();