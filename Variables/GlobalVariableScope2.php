<?php


 
// Sample 1 
// Defining the Global Variable 
global $name ;
// This is Assigning the Global Variable
 $name ='Abduhadi';

function print_name() {
    $name = "PHP!";
    echo $name;

}
 print_name();
//  echo $name;


// Sample 2
global $message ;
$message = "Welcome to PHP!";

function print_message() {
    // the function can not access the Global variable
    // echo $message;
}

print_message();
echo $message;