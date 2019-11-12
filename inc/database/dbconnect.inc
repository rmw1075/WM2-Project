// PLEASE MAKE SURE TO EDIT THIS BEFORE TESTING SCRIPT.

//ALSO, PLEASE DO NOT SAVE THIS TO THE REPOSITORY WITH YOUR CHANGES SETTINGS. PLEASE RETURN THE SCRIPT TO NORMAL BEFORE COMMITING




<?php
//                      whichMachine  username    password  whichDatabaseToUse
$mysqli = mysqli_connect("", "", "", "");
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>