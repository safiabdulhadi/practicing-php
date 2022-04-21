<?php
$message = "This is a PHP Language";

echo "Printing the message variable : $message" . "<br>";
echo 'Printing the message variable : $message' . "<br>";


$message2 = "PHP Prints this message faster";
echo "$message - $message2" . "<br>";

//  With single quote it doesn't print 
echo "$message" . '$message2' . "<br>";

// Here it print both variables 
echo $message . $message2;
?>
