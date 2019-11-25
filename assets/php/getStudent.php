<?php
$path = './';
$page = 'Results';
require $path . '../../dbconnect.inc';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/template.css" />
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<div class="content">
<?php
    $path = './';
    $page = 'Login';
    include $path . '../inc/header3.php';
    ?>
<?php
$q = $_GET['q'];
if ($q == "All") {
    $sql = "SELECT users.userID, firstName, lastName, quizDate, score FROM rmw1075.users INNER JOIN rmw1075.results ON users.userID = results.userID";
} else {
    $sql = "SELECT users.userID, firstName, lastName, quizDate, score FROM rmw1075.users INNER JOIN rmw1075.results ON users.userID = results.userID WHERE users.userID = '$q'";
}
$result = mysqli_query($mysqli,$sql);

echo "<table>
<tr>
<th>UserID</th>
<th>Name</th>
<th>Date Taken
<th>Score</th>
</tr>";
if (mysqli_num_rows($result) > 0){
    while ($row = $result->fetch_assoc()) {
				$_SESSION["result"] = $row['userID'];
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
echo "</table>";
mysqli_close($mysqli);
?>
</div>
<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
    ?>
</body>
</html>
