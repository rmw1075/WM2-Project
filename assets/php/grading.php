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
for ($a = 0; $a < count($_SESSION["qorder"]); $a++){
    echo $_SESSION["qorder"][$a];
}

$questionOrder = $_SESSION["qorder"];
$optionOrder = $_SESSION["opOrder"];
echo $_SESSION["userID"];
$answered = array();
for ($a = 0; $a < count($questionOrder); $a++){
    $answer = $_POST["option$a"];
    array_push($answered, $answer);
}
$correctTotal = 0;
echo "Here";
for ($a = 0; $a < count($questionOrder); $a++) {
    $pointer = $questionOrder[$a];
    $stmt = "SELECT qnum, correct FROM quiz WHERE qnum='$pointer'";
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
echo "Here 2";
$optionsImploded = array();
foreach ($optionOrder as $op) {
    $optionString = implode("-", $op);
    array_push($optionsImploded, $optionString);
}
echo "Here3";

// An error is being thrown here : binding_error
try {
    $stmt = $mysqli->prepare("INSERT INTO rmw1075.results(userID, quizDate, qOrder, answerOrder, chosen, score) VALUES (:userID, :quizDate, :qOrder, :answerOrder, :chosen, :score)");
    $naame = $_SESSION["userID"];
    $stmt->bind_param(":userID", $naame);
    echo "TEEEEEST";
    $stmt->bind_param(":quizDate", $date);
    $stmt->bind_param(":qOrder", implode(',', $questionOrder));
    $stmt->bind_param(":answerOrder", implode(',', $optionsImploded));
    $stmt->bind_param(":qOrder", implode(',', $answered));
    $stmt->bind_param(":score", $total);
    $stmt->execute();
    $stmt->close();
    echo "Here4";  
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>