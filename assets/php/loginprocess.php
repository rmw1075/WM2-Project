<?php
$path = './';
$page = 'Login';
require $path . '../../inc/database/dbconnect_rmw.inc';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./commentprocess.css">
	<script src="process.js"></script>
	<title>User</title>
</head>

<body>
    <h2>Logging in... </h2>
    <button><a href="../../login.php">Login</a></button>
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
    $password = test_input($_POST['password']);
        
    ?>


	<!-- Close database connection -->
	<?php
	mysqli_close($mysqli);
	?>
</body>

</html>