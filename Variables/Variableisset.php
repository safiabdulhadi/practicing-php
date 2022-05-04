<?php

//Empty Variable

$name;
echo $name;

// Ternary operator // () ? true : false;

echo isset($name) ? "Variable Set" : "Variable is not set";

$name = "John , smith";
echo isset($name) ? "Variable Set" : "Variable is not set";

$firstname = "Test";
$name = $firstname;
echo isset($name) ? "Variable Set" : "Variable is not set";