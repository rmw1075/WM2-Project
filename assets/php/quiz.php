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
if ($_SESSION) {
    echo "<h1>You have already taken the quiz.</h1>";
    echo "<a href=\"./results.php\">View your results</a>";
}
else {
    $stmt = "SELECT * FROM quiz";
    $results = mysqli_query($mysqli, $stmt);
    $questions = array();
    if (mysqli_num_rows($results) > 0) {
        while ($row = $results->fetch_assoc()) {
            $q = array($row["qnum"], $row["question"], $row["correct"], $row["option2"], $row["option3"], $row["option4"]);
            array_push($questions, $q);
        }
    }

    $qOrder = array();
    shuffle($questions);
    foreach ($questions as $a) {
        array_push($qOrder, $a[0]);  
    }

    echo "<form name=\"quizForm\" method=" . "\"POST\"" ." action=" . "\"grading.php\"" . "><br />";
    $optionsOrder = array();
    for($a = 0; $a < count($questions); $a++) {
        $question = $questions[$a];
        $questionName = $question[1];
        $options = array($question[2],$question[3],$question[4],$question[5]);
        shuffle($options);
        array_push($optionsOrder, $options);
        $num = eval('return '.$a."+".'1'.';');
        echo "<fieldset>";
        echo "<legend>" . "$num:" . " $questionName" . "</legend><br />";
        for ($b = 0; $b < 4; $b++) {
            echo "<input type=". "\"radio\"" . "name=" . "\"option$a\"" . " value=" . "\"$options[$b]\"" . ">";
            echo "$options[$b]";
            echo "</input><br />";
        }

        echo "</fieldset><br />";
    }

    echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" />";
    echo "</form>";
    $_SESSION["qorder"] = $qOrder;
    $_SESSION["opOrder"] = $optionsOrder;
}
?>