<?php
$path = './';
$page = 'CommentForm';
require $path . '../../dbconnect.inc';
session_start();

if ($mysqli) {
	if (isset($_GET['name']) && isset($_GET['comment'])) {
		$name = $_GET['name'];
		$comment = $_GET['comment'];
		$stmt = $mysqli->prepare("INSERT INTO python_comments (`name`, comment) VALUES(?, ?)");
		$stmt->bind_param("ss", $name, $comment);
		$stmt->execute();
		$stmt->close();
	}
	$sql = "SELECT * FROM python_comments";
	$res = $mysqli->query($sql);
	if ($res) {
		while ($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
			$records[] = $rowHolder;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script src="../js/validate.js"></script>
	<title>Blog</title>
</head>
<style>
	.danger {
		background-color: #ffdddd;
		border-left: 6px solid #f44336;
	}

	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td,
	th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}

	input[type=text] {
		width: 50%;
		padding: .5em;
		box-sizing: border-box;
		background-color: #fffbf7;
	}

	input[type=submit] {
		background-color: #ff9429;
		padding: .3em;
		text-decoration: none;
		margin: .1em, .1em;
		cursor: pointer;
		width: 100px;
		height: 25px;
		border: none;
	}

	input[type=submit]:hover {
		background-color: #ffba75;
	}

	.form>* {
		display: block;
		padding: .5em;
		margin: 1em;
	}
</style>

<body>
	<div class="content">
		<?php

		$path = './';
		$page = 'Help';
		include $path . '../inc/header3.php';
		?>
		<div id="content">
			<div id="formContainer">
				<form name="blogForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" methon="POST" class="form" onsubmit="return validateForm();">
					<h3>Comment Form:</h3>
					<div id="alerts">
					</div>
					<input type="text" id="name" name="name" placeholder="Name">
					<input type="text" id="comment" name="comment" placeholder="Comment">

					<div id="formButton">
						<input class="button" type="submit" value="Comment" />
					</div>
				</form>
			</div>

			<div id="commentBox">
				<div class="FormHeader">
					<h3>Comments</h3>
				</div>
				<table>
					<tr>
						<th>Name</th>
						<th>Comment</th>
					</tr>
					<?php
					if (mysqli_num_rows($res) > 0) {
						foreach ($records as $rowHolder) {
							echo "<tr>";
							echo "<td>" . $rowHolder['name'] . "</td>";
							echo "<td>" . $rowHolder['comment'] . "</td>";
							echo "</tr>";
						}
					}
					?>
				</table>

			</div>
		</div>
	</div>
	<?php
	$path = './';
	$page = 'Home';
	include $path . '../inc/footer.php';
	echo "<script>document.getElementById(\"blog\").style.color = \"orange\";</script>";
	?>