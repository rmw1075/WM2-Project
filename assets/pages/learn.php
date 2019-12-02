<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/learn.css">
	<title>Learn</title>
</head>

<body>
	<div class="content">
		<?php
		session_start();
		$path = './';
		$page = 'Learn';
		include $path . '../inc/header2.php';
		?>
		<div id="content">
			<p>
				The goal of LearnPy is to teach some of the basic concepts of Python to beginners in order to get them comfortable with the language. Content has been divided into three categories: <a href="./data.php">data types</a>, <a href="./syntax.php">syntax</a>, and how to write <a href="./loops.php">loops</a>.
			</p>
			<p>
				To get started, click on one of the links above to go to the lesson page. After reading through all the lessons, you can take a <a href="./quiz.php">quiz</a> to test what you've learned.
			</p>
		</div>
	</div>
	<?php
	$path = './';
	$page = 'Home';
	include $path . '../inc/footer.php';
	echo "<script>document.getElementById(\"learn\").style.color = \"orange\";</script>";
	?>
</body>

</html>
