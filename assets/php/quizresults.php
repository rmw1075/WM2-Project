<?php
$path = './';
$page = 'Quiz';
require $path . '../../dbconnect.inc';
session_start();
include $path . '../inc/header.php';

if (!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] == false)) {
	header("location: ../php/login.php");
}
echo "<h1>Quiz Results for <span style=\"text-decoration: underline;\">" . $_SESSION["userID"] . "</span></h1>";
?>

<br />
<link rel="stylesheet" type="text/css" href="../css/quizresults.css" />
<?php
$userID = $_SESSION["result"];
$stmt = "SELECT qOrder, answerOrder, chosen FROM results WHERE userID = '$userID'";
$results = mysqli_query($mysqli, $stmt);
$qOrder = [];
$answers = [];
$chosen = [];
if (mysqli_num_rows($results) > 0) {
	while ($row = $results->fetch_assoc()) {
		$qOrder = explode(",", $row["qOrder"]);
		$answers = explode("yeet", $row["answerOrder"]);
		$chosen = explode("yeet", $row["chosen"]);
	}
	$count = 0;
	foreach ($qOrder as $q) {
		$sql = "SELECT question, correct FROM quiz WHERE qnum = '$q'";
		$res = mysqli_query($mysqli, $sql);
		if (mysqli_num_rows($res) > 0) {
			while ($row = $res->fetch_assoc()) {
				$correct = $row["correct"];
				$quest = $row["question"];
			}
			$choice = $chosen[$count];
			$qAnswers = explode("@@@", $answers[$count]);
			$num = eval('return ' . $count . "+" . '1' . ';');
			echo "<fieldset><legend>$num: $quest</legend><br />";

			foreach ($qAnswers as $qa) {
				if (strcmp($qa, $choice) == 0) {
					if (strcmp($qa, $correct) == 0) {
						echo "<input type=\"radio\" class=\"correct\" value=\"$qa\"> $qa </input><br />";
					} else {
						echo "<input type=\"radio\" class=\"wrong\" value=\"$qa\"> $qa </input><br />";
					}
				} else if (strcmp($qa, $correct) == 0) {
					echo "<input type=\"radio\" class=\"correct\" value=\"$qa\"> $qa </input><br />";
				} else {
					echo "<input type=\"radio\" value=\"$qa\"> $qa </input><br />";
				}
			}
			echo "</fieldset><br  />";
			$count++;
		}
	}
}
?>
