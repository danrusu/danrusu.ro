<?php


include_once "Iteration.php";

$myObject = new MyClass();

print "Visible from within:\n";
$myObject->printVisible();

print "\nVisible fom outside:\n";
foreach ($myObject as $key => $value) {
    print "$key => $value\n";
}