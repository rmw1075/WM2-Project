<?php
// Initialize the session
$path = './';
$page = 'Login';
require $path . '../../dbconnect.inc';
session_start();
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
    	// Store data in session variables
    	$_SESSION["loggedin"] = true;
    	$_SESSION["userID"] = $row["userID"];
    	$_SESSION["name"] = $row["firstName"];
    	$_SESSION["role"] = $row["role"];
    	if ($_SESSION["role"] == "Student"){
      		$stmt = "SELECT * FROM results WHERE userID = '$userID'" ;
      		$result = mysqli_query($mysqli, $stmt);
      		if (mysqli_num_rows($result) > 0) {
        		$_SESSION["quiz"] = true;
      		} else {
        	$_SESSION["quiz"] = false;
      		}
    	} else {
      		$_SESSION["quiz"] = false;
		}
		
		$stmt = "SELECT * FROM surveycomments WHERE userID = '$userID'" ;
		$result = mysqli_query($mysqli, $stmt);
		if (mysqli_num_rows($result) > 0) {
			$_SESSION["survey"] = true;
		} else {
			$_SESSION["survey"] = false;
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
	<link rel="stylesheet" type="text/css" href="../css/template.css" />
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
		input[type=submit]{
		background-color:#ff9429;
		padding:.3em;
		text-decoration:none;
		margin:.1em,.1em;
		cursor:pointer;
		width:100px;
		height:25px;
		border:none;
		}
		input[type=submit]:hover{
		background-color:#ffba75;
		}
		form{display:block;}
		.form > *{
			display:block;
			padding:.5em;
			margin:1em;
		}
		input[type=text]{
		width:50%;
		padding:.5em;
		box-sizing: border-box;
		background-color: #fffbf7;
	}
	input[type=password]{
		width:50%;
		padding:.5em;
		box-sizing: border-box;
		background-color: #fffbf7;
	}
    </style>
</head>
<body>
	<div class="content">
    <?php
    $path = './';
    $page = 'Login';
    include $path . '../inc/header3.php';
    ?>
	<div id="content">
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>UserID</label>
            <input type="text" name="userID" /> <br />
            <label>Password</label>
            <input type="password" name="password">
			<br>
			<br>
            <input type="submit" value="Login">
            <p>Don't have an account? <a href="./register.php">Sign up now</a>.</p>
        </form>
    </div>
	</div>
	</div>
	<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
    ?>
</body>

</html>
