<?php
$path = './';
$page = 'Quiz';
require $path . '../../inc/database/dbconnect.inc';
?>
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) {
    header("location: ../../loginpage.php");
    exit;
}
?>
<?php
$stmt = "SELECT * FROM quiz";
$results = mysqli_query($mysqli, $stmt);
$questions = array();
if (mysqli_num_rows($results) > 0) {
    while ($row = $results->fetch_assoc()) {
        $q = array($row["qnum"], $row["question"], $row["correct"], $row["option2"], $row["option3"], $row["option4"]);
        array_push($questions, $q);
    }
}
shuffle($questions);
echo "<form name=\"quizForm\" method=" . "\"POST\"" ." action=" . "\"grading.php\"" . "><br />";
$optionsOrder = array();
for($a = 0; $a < count($questions); $a++) {
    $question = $questions[$a][1];
    $options = array($questions[$a][2],$questions[$a][3],$questions[$a][4],$questions[$a][5]);
    shuffle($options);
    array_push($optionsOrder, $options);
    $num = eval('return '.$a."+".'1'.';');
    echo "<fieldset>";
    echo "<legend>" . "$num:" . " $question" . "</legend><br />";
    for ($b = 0; $b < 4; $b++) {
        echo "<input type=". "\"radio\"" . "name=" . "\"option$a\"" . " value=" . "\"$options[$b]\"" . ">";
        echo "$options[$b]";
        echo "</input><br />";
    }
    echo "</fieldset><br />";
}

echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" />";
echo "</form>";

$_SESSION["qorder"] = $questions;
$_SESSION["opOrder"] = $optionsOrder;

?>