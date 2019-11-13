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
<html>
<head>
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

<form>
<select name="students" onchange="showStudent(this.value)">
  <option value="" selected>Select a person:</option>
  <?php
    $stmt = "SELECT userID, `name`, `role` FROM rmw1075.users WHERE `role`='Student'";
    $result = mysqli_query($mysqli, $stmt);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"" . $row["userID"] . "\">" . $row["name"] . "</option>";
        }
    }
  ?>
  <option class="bold" value="All"><b>ALL STUDENTS</b></option>
  </select>
</form>
<br>
<h1>Student Test Result: </h1>
<div id="result"><b>No student selected.</b></div>

</body>
</html>