<?php
$path = './';
$page = 'Comment Submitted';
require $path . './inc/database/dbconnect_rmw.inc';
?>

<?php

// Define variables and initialize with empty values
$userID = $password = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Processing form data when form is submitted
// if (!empty($_POST["userID"])) {
//   $userID = $_POST["userID"];
// }
$userID = test_input($_POST["userID"]);
echo "userID = $userID\n";
// Check if password is empty
// if (!empty($_POST["password"])) {
//   $password = $_POST["password"];
// }
$password = test_input($_POST["password"]);
echo "Password = $password\n";
$stmt = "SELECT `userID`, `password` FROM users WHERE userID = $userID";
// $stmt->bind_param("ss", $userID, $password);
$result = mysqli_query($mysqli, $stmt);
if (mysqli_num_rows($result) > 0): ?>
		<table>
  			<thead>
    			<tr>
					  <th>userID</th>
					  <th>password</th>
    			</tr>
  			</thead>
  			<tbody>
			<?php while($row = mysqli_fetch_assoc($result)) {?>
    			<tr>
					  <td><?php echo $row["userID"] ?></td>
					  <td><?php echo $row["password"] ?></td>
    			</tr>
			<?php } ?>
  			</tbody>
		</table>
  <?php endif; ?>
<?php
// Validate credentials
if (1 == 1) {
  // Prepare a select statement
  $stmt = "SELECT userID, `password` FROM users WHERE userID = $userID";
  // $stmt->bind_param("ss", $userID, $password);
  $res = mysqli_query($mysqli, $stmt);
  if (mysqli_num_rows($res) == 1) {
    // Bind result variables
    // mysqli_bind_result($stmt, $userID, $hashed_password);
    // if(true){
    // if(mysqli_stmt_fetch($stmt)){
    // if(password_verify($password, $hashed_password)){
    // if (true){ 
    // Password is correct, so start a new session
    session_start();
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["userID"] = $userID;
    echo "YEEEEEEEEEET";
    // Redirect user to welcome page
    header("location: ./welcome.php");
    // } else{
    // }
  } else {
    echo "No username found";
  }
}
?>