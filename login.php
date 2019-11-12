<?php
$path = './';
$page = 'Comment Submitted';
require $path . './inc/database/dbconnect.inc';
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
echo "userID = $userID";
$password = test_input($_POST["password"]);
echo "password = $password";
$stmt = "SELECT * FROM users WHERE userID = '$userID' and `password` = '$password'";
$result = mysqli_query($mysqli, $stmt);
if (mysqli_num_rows($result) > 0) {
  echo "howdy"; 
  session_start();
  // Store data in session variables
  $_SESSION["loggedin"] = true;
  while($row = $result->fetch_assoc()) {
    $_SESSION["userID"] = $row["userID"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["role"] = $row["role"];
  }
  // Redirect user to welcome page
  header("location: ./welcome.php");
}
else {
?>
    <h1>No user found!</h1>
    <span color="blue"><a href="./loginpage.php">Go back to Login</a></span>
<?php } ?>

<?php
  mysqli_close($mysqli);
?>