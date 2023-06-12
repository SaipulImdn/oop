<?php

require_once "data/manager.php";

$manager = new manager();
$manager->name = "Budi";
$manager->sayHello("joko");


$vp =new VicePresident();
$vp->name = "Syaiful imanudin";
$vp->sayHello("vivi");

$rm = new rumahtangga();
$rm ->name = "Agus";
$rm->sayHello("ipul");