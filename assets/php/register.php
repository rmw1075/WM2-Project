<?php
$path = './';
$page = 'Register';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form name="loginForm" method="POST" action="createuserprocess.php">
      <p>RIT UserID (ex: abc1234): <input type="text" name="userID" /></p>
      <p>Name: <input type="text" name="name" /></p>
      <p>Create a password: <input type="text" name="password1" /></p>
      <p>Re-enter password: <input type="text" name="password2" /></p>
      <p>Email: <input type="text" name="email" /></p>
      <section name="role">
        <h3>Role: </h3>
        <input type="radio" name="role" value="Instructor" /> Instructor<br />
        <input type="radio" name="role" value="Student" /> Student<br />
      </section>
      <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>
