<?php
$path = './';
$page = 'Register';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" type="text/css" href="../css/template.css" />
    <script src="../js/validate.js"></script>
    <title>Create User</title>
	<style>
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
		#content{
			margin-top:5em;
		}
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
    <h1>Create User</h1>
    <div id="alerts">
    </div>   
    <form name="loginForm" onsubmit="return validateRegister();" method="POST" action="createuserprocess.php" >
      <p>RIT UserID (ex: abc1234): <input id="userID" type="text" name="userID" /></p>
      <p>First name: <input id="fName" type="text" name="fname" /></p>
      <p>Last name: <input id="lName" type="text" name="lname" /></p>
      <p>Create a password: <input class="password" type="text" name="password1" /></p>
      <p>Re-enter password: <input class="password" type="text" name="password2" /></p>
      <p>Email: <input id="email" type="text" name="email" /></p>
      <section id="role" name="role">
        <h3>Role: </h3>
        <input type="radio" name="role" value="Instructor" /> Instructor<br />
        <input type="radio" name="role" value="Student" /> Student<br />
      </section>
      <input type="submit" name="submit" value="Submit" />
    </form>
</div>
</div>
<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
    ?>
</body>
</html>
