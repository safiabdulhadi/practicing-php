<?php
// Sample 1
global $message;
$message = "Welcome to PHP!";
echo $GLOBALS['message'] . "<br>";

// Sample 2
echo "Filename:  " . $_SERVER['PHP_SELF'];

// Sample 3
global $name;
$name = "Abdulhadi Safi";

function print_name() {
    echo $GLOBALS ['name'];
}

print_name();  