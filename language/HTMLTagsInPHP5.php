<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP and HTML</title>
    <!-- Sample 5 -->
    <script type="text/javascript">
    <?=
     "alert('Hello I am coming from PHP!' )";
     ?>
    </script>

</head>
<body>
    <h1>Embed PHP in HTML</h1>
    <!--Simple 1 -->
    <?php echo 'Hello World!'?>

    <!-- Sample 2 -->
     <?php  print "<p>Simple 1: this text is printed from PHP!</p>" ?>

  <?php  echo "<p>Simple 1: this text is printed from PHP!</p>" ?>
  <?=  '<hr>' ?>

     <!-- <p>
      <?php  echo 'Sample 2: This text is printed from PHP' ?>
      </p> -->

     <!-- Sample 3 -->
      <!-- <p style='color:red;'>Sample 3: This is a red text!</p> -->

      <p <?= " style='color:red;' "?>>Sample 3: This is a red text with PHP!</p>

      <!-- Sample 4 -->
      <?= "<p>" ?>
         Sample 4: This is a red text with PHP!
      <?= "</p>"  ?>
 
</body>
</html>