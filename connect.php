<?php
$path = './';
$page = 'Order Reciept';
require $path . './dbconnect.inc';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend Test</title>
</head>
<body>
    <?php
      $sql = "SELECT answer FROM quiz where question=1";
      $res = mysqli_query($mysqli, $sql);
      $row = mysqli_fetch_row($res);
      $answer = $row[0];
      echo $answer;  
    ?>
</body>
</html>
