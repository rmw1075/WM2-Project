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
    <link rel="stylesheet" type="text/css" href="../css/register.css" />
    <script type="txt/javascript" src="../js/validate.js"></script>
    <title>Create User</title>
</head>
<body>
    <?php
    $path = './';
    $page = 'Sign Up';
    include $path . '../inc/header.php';
    ?>
    <h1>Create User</h1>    
    <div class="danger">
      <p><strong>Danger!</strong> Some text...</p>
    </div>
    <form name="loginForm" onsubmit="return validateRegister();" method="POST" action="createuserprocess.php" >
      <p>RIT UserID (ex: abc1234): <input type="text" name="userID" /></p>
      <p>First name: <input type="text" name="fname" /></p>
      <p>Last name: <input type="text" name="lname" /></p>
      <p>Create a password: <input type="text" name="password1" /></p>
      <p>Re-enter password: <input type="text" name="password2" /></p>
      <p>Email: <input type="text" name="email" /></p>
      <section name="role">
        <h3>Role: </h3>
        <input type="radio" name="role" value="Instructor" /> Instructor<br />
        <input type="radio" name="role" value="Student" /> Student<br />
      </section>
      <input type="submit" name="submit" value="Submit" />
    </form>

</body>
</html>
