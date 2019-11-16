

<?php
//                      whichMachine  username    password  whichDatabaseToUse
$mysqli = mysqli_connect("localhost", "root", "Cc20178452", "rmw1075");
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>