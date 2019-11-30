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

<br  />
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
					if(mysqli_num_rows($res) > 0) {
						while ($row = $res->fetch_assoc()) {
							$correct = $row["correct"];
							$quest = $row["question"];
						}
						$choice = $chosen[$count];
						$qAnswers = explode("@@@", $answers[$count]);
						$num = eval('return '.$count."+".'1'.';');
						echo "<fieldset><legend>$num: $quest</legend><br />";

						foreach($qAnswers as $qa) {
							if (strcmp($qa, $choice) == 0) {
								if (strcmp($qa, $correct) == 0) {
									echo "<input type=\"radio\" class=\"correct\" value=\"$qa\"> $qa </input><br />";
								} else {
									echo "<input type=\"radio\" class=\"wrong\" value=\"$qa\"> $qa </input><br />";
								}
							} else if (strcmp($qa, $correct) == 0){
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
    // for($a = 0; $a < count($questions); $a++) {
    //     $question = $questions[$a];
    //     $questionName = $question[1];
    //     $options = array($question[2],$question[3],$question[4],$question[5]);
    //     shuffle($options);
    //     array_push($optionsOrder, $options);
    //     $num = eval('return '.$a."+".'1'.';');
    //     echo "<fieldset>";
    //     echo "<legend>" . "$num:" . " $questionName" . "</legend><br />";
    //     for ($b = 0; $b < 4; $b++) {
    //         echo "<input type=". "\"radio\"" . "name=" . "\"option$a\"" . " value=" . "\"$options[$b]\"" . ">";
    //         echo "$options[$b]";
    //         echo "</input><br />";
    //     }
		//
    //     echo "</fieldset><br />";
    // }
		?>
