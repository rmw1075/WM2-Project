<?php
$path = './';
$page = 'Results';
require $path . '../../inc/database/dbconnect.inc';
?>
<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
    header("location: ../../loginpage.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Result</h1>
    <table>
        <tr>
            <th>userID</th>
            <th>Name</th>
            <th>Quiz Date</th>
            <th>Score</th>
        </tr>
        <?php
        $userID = $_SESSION["userID"];
        $stmt = "SELECT users.userID, `name`, quizDate, score FROM rmw1075.users INNER JOIN rmw1075.results ON users.userID = results.userID WHERE users.userID = '$userID'";
        $result = mysqli_query($mysqli, $stmt);
        if (mysqli_num_rows($result) > 0){
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['userID'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                if($row['quizDate'] == "") {
                    echo "<td>Not taken</td>";
                    echo "<td>N\A</td>";
                } else {
                    echo "<td>" . $row['quizDate'] . "</td>";
                    echo "<td>" . $row['score'] . "</td>"; 
                }
                echo "</tr>";    
            }
        }
        ?>
    </table>
</body>
</html>