<?php
$path = './';
$page = 'Login';
require $path . '../../dbconnect.inc';
?>

<?php
$userID = $password = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$userID = test_input($_POST["userID"]);
$password = test_input($_POST["password"]);

$stmt = "SELECT * FROM users WHERE userID = '$userID'";
$result = mysqli_query($mysqli, $stmt);
$passwordstatus = false;
if (mysqli_num_rows($result) > 0) {
  $row = $result->fetch_assoc();
  $passwordstatus = password_verify($password, $row["password"]);
  if ($passwordstatus) { 
    session_start();
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["userID"] = $row["userID"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["role"] = $row["role"];
    if ($_SESSION["role"] == "Student"){
      $stmt = "SELECT * FROM results WHERE userID= '$userID'";
      $result = $result = mysqli_query($mysqli, $stmt);
      if (mysqli_num_rows($result) > 0) {
        $_SESSION["quiz"] = "taken";
      } else {
        $_SESSION["quiz"] = "not taken";
      }
    }
    
    // Redirect user to welcome page
    header("location: ../pages/home.php");
  } 
}

if ($passwordstatus == false){
?>
    <h1>No user found!</h1>
    <span color="blue"><a href="./loginpage.php">Go back to Login</a></span>
<?php } ?>

<?php
  mysqli_close($mysqli);
?>