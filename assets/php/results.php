<?php
$path = './';
$page = 'Results';
require $path . '../../dbconnect.inc';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="content">
        <?php
        $path = './';
        $page = 'Login';
        include $path . '../inc/header3.php';
        ?>
        <div id="content" style="margin-top:9em;">
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
                $stmt = "SELECT users.userID, users.firstName, users.lastName, results.quizDate, results.score FROM rmw1075.users INNER JOIN rmw1075.results ON users.userID = results.userID  WHERE results.userID = '$userID' ";
                $result = mysqli_query($mysqli, $stmt);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['userID'] . "</td>";
                        echo "<td>" . $row['lastName'] . ", " . $row['firstName'] . "</td>";
                        if ($row['quizDate'] == "") {
                            echo "<td>Not taken</td>";
                            echo "<td>N\A</td>";
                        } else {
                            echo "<td>" . $row['quizDate'] . "</td>";
                            echo "<td>" . $row['score'];
                            echo "  <span style=\"color: blue; text-decoration: underline;\"><a href=\"./quizresults.php\">See quiz</a></span></td>";
                        }
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <?php
    $path = './';
    $page = 'Home';
    include $path . '../inc/footer.php';
    ?>

</body>

</html>
