<?php

require_once "data/manager.php";

$manager = new manager();
$manager->name = "Budi";
$manager->sayhello("Joko");

$manager = new VicePresident();
$manager->name = "Syaiful";
$manager->sayHello("imanudin");