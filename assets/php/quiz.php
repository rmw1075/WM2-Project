<?php
$path = './';
$page = 'Quiz';
require $path . '../../inc/database/dbconnect.inc';
?>

<?php
$stmt = "SELECT * FROM quiz";
$results = mysqli_query($mysqli, $stmt);

if (mysqli_num_rows($results) > 0) {
    
}

?>