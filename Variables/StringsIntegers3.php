<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Constants</title>
</head>
<body>
  <!-- Sample 1 -->
  <h1>Define Strings</h1>
  <?php
$name = "John , Smith";
$message = "This is a String Message";
echo $name . " : " . $message . "<br>";
echo "$name : $message" ;
  ?>

  <h1>Define Integers</h1>

  <?php

   $version = 7.3;
   echo "PHP Version is $version";
  ?>
<!-- Sample 2 -->
<h1>Combine String and Integer</h1>
<?php
echo "$name : $message <br>";
echo "name: $name <br>";
$language = "PHP";

echo "$language version is $version <br>";
// echo "$language . " version is " . $version;
?>

<!-- Sample 3 -->
<h1>Add Two Values</h1>
<?php
$firstValue = 10;
$secondValue = 20;
$total = $firstValue + $secondValue;

echo " Total : " . $total;
?>



</body>
</html>