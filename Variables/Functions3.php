<?php

// Sample 1
// Define a function 

// Function Declaration
function add() {

    // Function Body
    $firstValue = 10;
    $secoundVvalue = 20;
    $total = $firstValue + $secoundVvalue;
    echo $total;
}
// Calling  the function
// Add method
add();

// Sample 2
// we cant Duplicate same Function

/*
function add() {
    echo 'Duplicte Function'
}
*/


// Sample 3

welcome_message();   

function welcome_message() {
    echo 'Welcome to PHP Functions!';
}