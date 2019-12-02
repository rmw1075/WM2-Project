<link rel="stylesheet" type="text/css" href="../css/template.css" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<!-- <?php
		// session_start();
		?> -->
<div id="header">
	<div id="leftLinks">
		<a href="../pages/learn.php" id="learn">Learn</a>
		|
		<?php
		if ((isset($_SESSION["loggedin"])) && ($_SESSION["loggedin"] == true)) {
			if (strcmp($_SESSION["role"], "Student") == 0) {
				echo "<a href=\"../pages/quiz.php\" id=\"quiz\">Quiz</a>|";
			}
			if ($_SESSION["survey"] == false) {
				echo "<a href=\"../pages/survey.php\">Survey</a>|";
			}
		}
		?>
		<a href="../pages/blog.php">Blog</a>
		|
		<a href="../pages/about.php" id="about">About Us</a>
	</div><!-- End of leftLinks -->

	<div id="rightLinks">
		<?php
		if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
			echo "Hi " . $_SESSION["name"] . "! |";
			if (strcmp($_SESSION["role"], "Instructor") == 0) {
				echo "<a href=\"../php/instructor.php\">View Scores</a>|";
			} else {
				if ($_SESSION["quiz"] == true) {
					echo "<a href=\"../php/results.php\">View Your Scores</a>|";
				}
			}
			echo "<a href=\"../php/logout.php\">Logout</a>";
		} else {
			echo "<a href=\"../php/login.php\">Login</a>";
		}
		?>
	</div><!-- End of rightLinks -->
</div><!-- End of header -->
<br />