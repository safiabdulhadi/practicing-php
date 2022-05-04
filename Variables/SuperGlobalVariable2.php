<?php
// Sample 1
global $message;
$message = "Welcome to PHP!";
echo $GLOBALS['message'] . "<br>";

// Sample 2
echo "Filename:  " . $_SERVER['PHP_SELF'];