<?php
//$message = " Data Sent";
//$message .= " October 1, 2019\n";
//echo "Today is sample of PHP, see ---> $message";

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

/*if (isset($_POST['name']) ) {
	$name = test_input($name['name']);
}
else {
	$name = "No visitor name supplied";
}*/
$name =       $_POST['name'];
//$groupNum =   $_POST['groupNum'];
//$visitDate =  $_POST['visitDate'];
$topic =      $_POST['favTopic'];
$rate =       $_POST['rate'];
//$dest_email = "kcl4926@g.rit.edu";
//$dest_email = "RITISTprofessor@gmail.com";

$email_subject = "LearnPy Survey";

/*if ($name == ""){
	$extra = " "
} 
else{
	$email_body = "Visitor name: $name \n";
}*/


/*if ($groupNum == ""){
	$extra = " "
} 
else{
	$email_body .= "Group size: $groupNum \n";
}*/


/*if ($visitDate == ""){
	$extra = " "
}
else{
	$email_body .= "Date visited: $visitDate \n";
}*/

/*if ($place == ""){
	$extra = " "
}
else{
	$email_body .= "Favorite place: $place \n";
}*/

/*if ($rate == ""){
	$extra = " "
}
else{
	$email_body .= "Rating --> $rate \n";
}*/

$email_body = "Visitor name: $name \n";
//$email_body .= "Group size: $groupNum \n";
//$email_body .= "Date visited: $visitDate \n";
$email_body .= "Favorite topic: $topic \n";
//$email_body .= "Rating --> $rate \n";
mail($dest_email, $email_subject, $email_body);
echo "Email data sent";
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<figure>
	<img src="images/thankyou2.png" alt="Thank you" title="Thank you for your feed back"> 
	</figure>
Thank you for submitting your feedback on our survey. Your results will be emailed for us to look at.
</body>
</html>
