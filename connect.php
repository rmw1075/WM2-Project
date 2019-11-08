<?php
$path = './';
$page = 'Order Reciept';
// require $path . './inc/database/dbconnect_rmw.inc';
require $path . './inc/database/dbconnect_lab.inc';
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
    <h1>Login</h1>
    <form id="login">
      <input type="text" name="userID" /><br>
      <input type="text" name="name" /><br />
      <input type="text" name="password1" /><br />
      <input type="text" name="password2" /><br />
      <input type="text" name="email" /><br />
      <section name="role">
        <input type="checkbox" name="role" value="Instructor" /><br />
        <input type="checkbox" name="role" value="Student" /><br />
      </section>

    </form>
    <?php
      $sql = "SELECT answer FROM quiz where question=1";
      $res = mysqli_query($mysqli, $sql);
      $row = mysqli_fetch_row($res);
      $answer = $row[0];
      echo $answer;  
    ?>
</body>
</html>
