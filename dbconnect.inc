

<?php
//                      whichMachine  username    password  whichDatabaseToUse
$mysqli = mysqli_connect("localhost", "at9148",   "highbuilt", "at9148");
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>
