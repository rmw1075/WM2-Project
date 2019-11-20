<?php
$path = './';
$page = 'Results';
require $path . '../../dbconnect.inc';
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
    <?php
    $path = './';
    $page = 'Results';
    include $path . '../inc/header.php';
    ?>
    <h1>Your Quiz Result: </h1>
    <table>
        <tr>
            <th>userID</th>
            <th>Name</th>
            <th>Quiz Date</th>
            <th>Score</th>
        </tr>
        <?php
        $userID = $_SESSION["userID"];
        $stmt = "SELECT users.userID, firstName, lastName, quizDate, score FROM rmw1075.users WHERE users.userID = '$userID' INNER JOIN rmw1075.results ON users.userID = results.userID ";
        $result = mysqli_query($mysqli, $stmt);
        if (mysqli_num_rows($result) > 0){
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['userID'] . "</td>";
                echo "<td>" . $row['lastName'] . ", " . $row['firstName'] . "</td>";
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