<?php
$path = './';
$page = 'Survey';
require $path . '../../dbconnect.inc';
session_start();

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


if ($mysqli) {
	  if (isset($_POST['favTopic']) && isset($_POST['quizrate'])  && isset($_POST['rate'])   ) {
	  	if( $_POST['favTopic']!='' && $_POST['quizrate']!='' && $_POST['rate']!='' ){
			$stmt=$mysqli->prepare("INSERT INTO surveycomments VALUES(?, ?, ?, ?)");
        	$favTopic =      $_POST['favTopic'];
        	$quizrate =       $_POST['quizrate'];
        	$rate =       $_POST['rate'];
			$stmt->bind_param("ssii", $_SESSION["userID"], $favTopic, $quizrate, $rate);
			$stmt->execute();
			$stmt->close();
			$_SESSION["survey"] = true;
	  	}//end of if to make sure data is sent using $_GET
      }//end of isset
	}





//$email_body = "Visitor name: $name \n";
//$email_body .= "Group size: $groupNum \n";
//$email_body .= "Date visited: $visitDate \n";
//$email_body .= "Favorite topic: $topic \n";
//$email_body .= "Rating --> $rate \n";
//mail($dest_email, $email_subject, $email_body);
//echo "Email data sent";
?>

<!DOCTYPE html>
<html lang="en">
<?php
    //include $path '/../inc/header.php';
?>
<head>
</head>
<body>
	<div class="content">
	<?php
		$path = './';
		$page = 'Help';
		include $path . '../inc/header3.php';
		?>
	<p style="padding-top:5em;margin-top:5em;">Survey Submitted
</p>
Thank you for submitting your feedback on our survey. Your results will be added into our database for us to look at.
</div>
<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
    ?>
</body>
</html>
