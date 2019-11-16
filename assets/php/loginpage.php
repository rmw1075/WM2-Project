<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    header("location: ../pages/home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
    $path = './';
    $page = 'Login';
    include $path . '../inc/header.php';
    ?>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="login.php" method="POST">
            <label>UserID</label>
            <input type="text" name="userID" /> <br />
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
            <p>Don't have an account? <a href="./register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>

</html>