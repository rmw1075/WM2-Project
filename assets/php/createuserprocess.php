<?php
$path = './';
$page = 'Comment Submitted';
require $path . '../../dbconnect.inc';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/template.css" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Create User</title>
	<style>
		button {
			background-color: #ff9429;
			padding: .3em;
			text-decoration: none;
			margin: .1em, .1em;
			cursor: pointer;
			width: 100px;
			height: 25px;
			border: none;
		}

		button:hover {
			background-color: #ffba75;
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


		<?php
		// validate input data
		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		// Get the user's Information
		$userID = test_input($_POST['userID']);
		$fname =  test_input($_POST['fname']);
		$lname =  test_input($_POST['lname']);
		$password1 = test_input($_POST['password1']);
		$password2 = test_input($_POST['password2']);
		$email = test_input($_POST['email']);
		$role = test_input($_POST['role']);
		$hashedpass = password_hash($password1, PASSWORD_BCRYPT);
		$stmt = $mysqli->prepare("INSERT INTO rmw1075.users(userID, firstName, lastName, `password`, email, `role`) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $userID, $fname, $lname, $hashedpass, $email, $role);
		$stmt->execute();
		?>
		<div id="content">
			<h2>Your Account has been created!</h2>
			<button><a href="./login.php">Login</a></button>
		</div>
	</div>
	<?php
	$path = './';
	$page = 'Home';
	include $path . '../inc/footer.php';
	?>

</body>

</html>

<!-- Close database connection -->
<?php
mysqli_close($mysqli);
?>