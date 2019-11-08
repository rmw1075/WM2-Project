<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  header("location: ./welcome.php");
  exit;
}

$path = './';
$page = 'Student Login';
require $path . 'inc/database/dbconnect_rmw.inc';
 
// // Define variables and initialize with empty values
// $userID = $password = "";
 
// // Processing form data when form is submitted
//     if(!empty($_POST["userID"])){
//         $userID = $_POST["userID"];
//     }
    
//     // Check if password is empty
//     if(!empty(trim($_POST["password"]))){
//         $password = $_POST["password"];
//     }

//     // Validate credentials
//     if(!empty($userID) && !empty($password)){
//         // Prepare a select statement
//         $stmt = "SELECT userID, `password` FROM rmw1075.users WHERE userID = $userID";
//         // $stmt->bind_param("ss", $userID, $password);
//         $res = mysqli_query($mysqli, $stmt);
//         if(mysqli_num_rows($res) == 1){                    
//             // Bind result variables
//             // mysqli_bind_result($stmt, $userID, $hashed_password);
//             if(true){
//             // if(mysqli_stmt_fetch($stmt)){
//                 // if(password_verify($password, $hashed_password)){
//                 if (true){ 
//                     // Password is correct, so start a new session
//                     session_start();
//                     // Store data in session variables
//                     $_SESSION["loggedin"] = true;
//                     $_SESSION["userID"] = $userID; 
//                     echo "YEEEEEEEEEET";                           
//                     // Redirect user to welcome page
//                     header("location: ./welcome.php");
//                 } else{
//                 }
//             }
//         } else{
//             echo "No username found";
//         }
//     }
// ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="login.php" method="POST">
            <label>UserID</label>
            <input type="text" name="userID" /> 
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
            <!-- <p>Don't have an account? <a href="register.php">Sign up now</a>.</p> -->
        </form>
    </div>    
</body>
</html>