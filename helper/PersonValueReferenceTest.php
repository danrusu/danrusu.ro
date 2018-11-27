<?php

//include_once "Person.php";
spl_autoload_register(function ($class_name) {

    var_dump($class_name);
    include $class_name . '.php';
});

$person = new Person("Dan", 37);


$value = $person;
$reference = &$person;


//$assigned = 100;
//$reference = 100;

var_dump($person);
var_dump($value);
var_dump($reference);

