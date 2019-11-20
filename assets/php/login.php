<?php
// Initialize the session
$path = './';
$page = 'Login';
require $path . '../../dbconnect.inc';

if (isset($_POST['userID']) && isset($_POST['password'])) {
$userID = $_POST["userID"];
$password = $_POST["password"];
$sql = "SELECT * FROM users WHERE userID = '$userID'";
$res = mysqli_query($mysqli, $sql);
$passwordstatus = false;
if (mysqli_num_rows($res) > 0) {
  $row = $res->fetch_assoc();
  $passwordstatus = password_verify($password, $row["password"]);
  if ($passwordstatus) { 
    session_start();
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["userID"] = $row["userID"];
    $_SESSION["name"] = $row["firstName"];
    $_SESSION["role"] = $row["role"];
    if ($_SESSION["role"] = "Student"){
      $stmt = "SELECT * FROM results WHERE userID = '$userID'" ;
      $result = mysqli_query($mysqli, $stmt);
      if (mysqli_num_rows($result) > 0) {
        $_SESSION["quiz"] = "taken";
      } else {
        $_SESSION["quiz"] = "not taken";
      }
    }
    
    // Redirect user to welcome page
    header("location: ../pages/home.php");
  } 
} else {
  echo "<h1>No user found!</h1>";
}
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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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