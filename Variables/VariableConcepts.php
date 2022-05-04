<?php
// Define a Variable 

$name = "John , Smith";

// Variable can be used as String and Interger
$message = 1;
$message = "PHP is the Best!";
echo $message . "<br>";

// Print variable with doule quotes
echo "Name variable = $name" . "<br>";
echo 'Name variable = $name' . "<br";

// Varible typing converting the string to integer and vic versa
$length = "10";
$breath = 20; 
$area = $length * $breath;

echo "Area : $area " . "<br>";

// Variable is case sensitive
$NAME = "Walter White";
echo "$name is not equal to $NAME" . "<br>";

// Variable Scope

$counter = 1;
function show_counter() {
    $counter = 2;
    echo $counter . "<br>";
}
show_counter();
echo $counter;

// Global Variables

global $count;
$count = 1;
function show_count() {
    global $count;
    $count = 2;
    echo $count;
}
show_count();
echo $count . "<br>";

// Static Variable
function counter_static() {
    static $count = 1;
    echo $count . "<br>";
    $count = $count + 1;
}
counter_static();
counter_static();
counter_static();
counter_static();
 

// Predefined Variables 
function print_global_variables() {
    echo $GLOBALS['count'] . "<br>";
}
print_global_variables();
// print_global_variables();


// Variable of variables

$countOfCount = "count";
echo $$countOfCount;


// isset function

echo isset($$countOfCount) ? "Variable is Set" : "Variable is not Set";