

<?php
$path = './';
$page = 'Quiz';
require $path . '../../dbconnect.inc';
session_start();
include $path . '../inc/header3.php';

if (!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] == false)) {
    header("location: ../php/login.php");
}
?>
<div id="quizHolder" style="margin-top:12em; margin-left:1em;">
<style>
input[type=submit]{
		background-color:#ff9429;
		padding:.3em;
		text-decoration:none;
		cursor:pointer;
		height:25px;
		border:none;
		width:100px;
		
		}
input[type=submit]:hover{
background-color:#ffba75;
}
#fset{
	width:50%;
	margin-left:auto;
	margin-right:auto;
	
}
#submitButton{
	left:45%;
	postion:relative;
}
</style>
<?php
if ($_SESSION["quiz"] == true) {
    echo "<h1>You have already taken the quiz.</h1>";
    echo "<a href=\"../php/results.php\">View your results</a>";
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

    echo "<form name=\"quizForm\" method=" . "\"POST\"" ." action=" . "\"../php/grading.php\"" . "><br />";
    $optionsOrder = array();
    for($a = 0; $a < count($questions); $a++) {
        $question = $questions[$a];
        $questionName = $question[1];
        $options = array($question[2],$question[3],$question[4],$question[5]);
        shuffle($options);
        array_push($optionsOrder, $options);
        $num = eval('return '.$a."+".'1'.';');
        echo "<fieldset id=\"fset\">";
        echo "<legend>" . "$num:" . " $questionName" . "</legend><br />";
        for ($b = 0; $b < 4; $b++) {
            echo "<input type=". "\"radio\"" . "name=" . "\"option$a\"" . " value=" . "\"$options[$b]\"" . ">";
            echo "$options[$b]";
            echo "</input><br />";
        }

        echo "</fieldset><br />";
    }

    echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" id=\"submitButton\">";
    echo "</form>";
    $_SESSION["qorder"] = $qOrder;
    $_SESSION["opOrder"] = $optionsOrder;
}


include $path . '../inc/footer.php';
echo "<script>document.getElementById(\"quiz\").style.color = \"orange\";</script>";
?>
