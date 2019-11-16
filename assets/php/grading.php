<?php
$path = './';
$page = 'Grading';
require $path . '../../dbconnect.inc';
?>
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) {
    header("location: ./loginpage.php");
    exit;
}
?>

<?php
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
$mysqli->close();
$total = eval('return '.$correctTotal."/".count($questionOrder).';');
$date = date('Y-m-d H:i:s');
$optionsImploded = array();
foreach ($optionOrder as $op) {
    $optionString = implode("-", $op);
    array_push($optionsImploded, $optionString);
}

// An error is being thrown here : binding_error
try {
    include($path . '../../inc/database/dbconnect.inc');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = $mysqli->prepare("INSERT INTO rmw1075.results VALUES (?, ?, ?, ?, ?, ?)");
    $naame = $_SESSION["userID"];
    $qo = implode(',', $questionOrder);
    $oi = implode(',', $optionsImploded);
    $a = implode(',', $answered);
    $sql->bind_param("sssssd", $naame, $date, $qo, $oi, $a, $total);
    $sql->execute();
    $sql->close();
    $mysqli->close();
    $_SESSION["quiz"] = "taken";  
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}

header("location: ./results.php");

?>