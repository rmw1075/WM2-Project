<?php
$path = './';
$page = 'Grading';
require $path . '../../dbconnect.inc';

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$questionOrder = $_SESSION["qorder"];
$optionOrder = $_SESSION["opOrder"];
$answered = array();
for ($a = 0; $a < count($questionOrder); $a++){
    $answer = $_POST["option$a"];
    array_push($answered, $answer);
}
$correctTotal = 0;
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
echo $total;
echo "<br />";
$date = date('Y-m-d H:i:s');
$optionsImploded = array();
foreach ($optionOrder as $op) {
    $optionString = implode("-", $op);
    array_push($optionsImploded, $optionString);
}
echo implode(",", $questionOrder);
echo "<br />";
echo implode(",", $optionsImploded);
try {
    $sql = $mysqli->prepare("INSERT INTO rmw1075.results VALUES (?, ?, ?, ?, ?, ?)");
    $naame = $_SESSION["userID"];
    $qo = implode(',', $questionOrder);
    $oi = implode(',', $optionsImploded);
    $a = implode(',', $answered);
    $sql->bind_param("sssssd", $naame, $date, $qo, $oi, $a, $total);
    $sql->execute();
    $sql->close();
    // $_SESSION["quiz"] = "taken";  
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>