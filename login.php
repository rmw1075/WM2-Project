<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h1>Login</h1>
    <form name="loginForm" method="POST" action="assets/php/loginprocess.php">
      <p>UserID: <input type="text" name="userID" /></p>
      <p>Enter password: <input type="text" name="password" /></p>
      <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>