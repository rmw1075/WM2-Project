<?php
$path = './';
$page = 'Grading';
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
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$questionOrder = $_SESSION["qorder"];
$optionOrder = $_SESSION["opOrder"];
$answered = array();
for ($a = 1; $a <= count($questionOrder); $a++){
    $answer = test_input($_POST["option$a"]);
    array_push($answered, $answer);
}
$corectTotal = "";

for ($a = 0; $a < count($questionOrder); $a++) {
    $stmt = "SELECT qnum, correct FROM quiz WHERE qnum='$questionOrder[$a]'";
    $result = mysqli_query($mysqli, $stmt);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $correct = $row["correct"];
            if($correct == $answered[$a]){
                $correctTotal++;
            }
        }
    }
}

$total = eval('return '.$correctTotal."/".count($questionOrder).';');
$date = date('Y-m-d H:i:s');
$stmt = $mysqli->prepare("INSERT INTO rmw1075.results(userID, quizDate, qOrder, answerOrder, chosen, score) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $userID, $name, $hashedpass, $email, $role);
$stmt->execute();
?>