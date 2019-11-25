<?php
$path = './';
$page = 'Results';
require $path . '../../dbconnect.inc';
session_start();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/template.css" />
<script>

function showStudent(str) {
    if (str == "") {
        document.getElementById("result").innerHTML = "No student selected.";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getStudent.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<style>
    .bold {
        font-weight: bold;
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
    <br />
    <h1>Student Test Result: </h1>
<form>
<select name="students" onchange="showStudent(this.value)">
  <option value="" selected>Select a student:</option>
  <?php
    $stmt = "SELECT userID, firstName, lastName, `role` FROM rmw1075.users WHERE `role`='Student' AND (userID IN (SELECT userID FROM rmw1075.results))";
    $result = mysqli_query($mysqli, $stmt);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"" . $row["userID"] . "\">" . $row["lastName"] .", " . $row["firstName"] . "</option>";
        }
    }
  ?>
  <option class="bold" value="All"><b>ALL STUDENTS</b></option>
  </select>
</form>
<br>

<div id="result"><b>No student selected.</b></div>
</div>
<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
    ?>
</body>
</html>
