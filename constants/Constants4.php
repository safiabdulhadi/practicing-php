<?php

// Sample 1

// Define Constant
// define(NAME OF THE CONSTANT, VALUE OF THE CONSTANT);

define( "LANGUAGE", "PHP");
$lang = LANGUAGE;

echo "This program is writting using $lang <br> ";
echo "This program is writting using LANGUAGE <br> ";
echo "This program is writting using " .  LANGUAGE . "<br> ";

// Sample 2

define ("LANGUAGE", "JAVA");
echo "This program is writting using " .  LANGUAGE . "<br> ";

// Sample 3
$LANGUAGE = "JAVA";
echo "This program is writting using " .  LANGUAGE . "<br> ";

// Sample 4

// We can not define Constant with the begining of Number 
// define ("1VERSION", 7.3);
// echo 1VERSION;
define ("VERSION", 7.3);
echo VERSION;