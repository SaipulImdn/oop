<?php

require_once "data/person.php";

$person = new person("Ipul", "imanudin");
$person->name = 'syaiful';
$person->address = 'cirebon';
$person->country = 'indonesia';


var_dump($person);

echo "Name : $person->name" .PHP_EOL;
echo "Address : $person->address" .PHP_EOL;
echo "Country : $person->country" .PHP_EOL;

$person = new person("syaiful", null);
$person->name = 'rio';
$person->address = null;
$person->country = 'malaysia';


var_dump($person);

