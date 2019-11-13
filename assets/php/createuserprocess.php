<?php
$path = './';
$page = 'Comment Submitted';
require $path . '../../inc/database/dbconnect.inc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./commentprocess.css">
	<script src="process.js"></script>
	<title>Create User</title>
</head>

<body>
	<?php
	// Grab form data, validate and interact with database

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
	$name =  test_input($_POST['name']);
    $password1 = test_input($_POST['password1']);
    $password2 = test_input($_POST['password2']);
    $email = test_input($_POST['email']);
	$role = test_input($_POST['role']);
	$hashedpass = password_hash($password1, PASSWORD_BCRYPT);
    $stmt = $mysqli->prepare("INSERT INTO rmw1075.users(userID, `name`, `password`, email, `role`) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $userID, $name, $hashedpass, $email, $role);
	$stmt->execute();
    ?>
    <h2>Your Account has been created!</h2>
    <button><a href="../../loginpage.php">Login</a></button>
</body>
</html>

<!-- Close database connection -->
<?php
mysqli_close($mysqli);
?>