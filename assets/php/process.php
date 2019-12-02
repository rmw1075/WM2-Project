<?php
$path = './';
$page = 'Survey';
require $path . '../../dbconnect.inc';
session_start();

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($mysqli) {
	if (isset($_POST['favTopic']) && isset($_POST['quizrate'])  && isset($_POST['rate'])) {
		if ($_POST['favTopic'] != '' && $_POST['quizrate'] != '' && $_POST['rate'] != '') {
			$stmt = $mysqli->prepare("INSERT INTO surveycomments VALUES(?, ?, ?, ?)");
			$favTopic =      $_POST['favTopic'];
			$quizrate =       $_POST['quizrate'];
			$rate =       $_POST['rate'];
			$stmt->bind_param("ssii", $_SESSION["userID"], $favTopic, $quizrate, $rate);
			$stmt->execute();
			$stmt->close();
			$_SESSION["survey"] = true;
			$userID = $_SESSION["userID"];
			$name = $_SESSION["name"];
			$dest_email = "rmw1075@g.rit.edu";
			$email_subject = "LearnPy Survey answers for $name";
			$email_body = "Name: $userID \n";
			$email_body .= "Favorite Topic: $favTopic \n";
			$email_body .= "Quiz Rating: $quizrate \n";
			$email_body .= "Overall Experiance: $rate \n";
			mail($dest_email, $email_subject, $email_body);
		} //end of if to make sure data is sent using $_GET
	} //end of isset
}
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
		<p style="padding-top:5em;margin-top:7em;">Survey Submitted
			<figure class="codeScreen" style="max-width:816px">
				<img id="thanks" src="./../images/ty.jpeg" alt="thanks!" title="thanks">
			</figure>
		</p style="padding:2em;">
		Thank you for submitting your feedback on our survey.
	</div>
	<?php
	$path = './';
	$page = 'Home';
	include $path . '../inc/footer.php';
	?>
</body>

</html>
