<?php

$male = "Abdulhadi Safi"; // male is a bariable 
$gender = "male"; // gender is holding a variable name 

echo $gender;
echo $$gender; // $($gender) ==> $(male)

echo "<br>";

$student = "abdulhadi , SAFI";
$male = "Student";
$gender = male;

echo "<br>";

echo $gender;
echo $$gender;
echo $$$gender;