<?php
$path = './';
$page = 'CommentForm';
require $path . '../../dbconnect.inc';
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($mysqli) {
	if (isset($_GET['name']) && isset($_GET['comment'])) {
        $name = test_input($_GET['name']);
        $comment = test_input($_GET['comment']);
	    $stmt=$mysqli->prepare("INSERT INTO Python_comments (`name`, comment) VALUES(?, ?)");
	    $stmt->bind_param("ss", $name, $comment);
	    $stmt->execute();
	    $stmt->close();
	}
    $sql = 'select name, comment from Python_comments';
    $res=$mysqli->query($sql);
    if($res){
	    while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
		    $records[] = $rowHolder;
	    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script  src="../js/validate.js"></script>
</head>
<body>

<?php 
include $path . "../inc/header.php";
?>
<br />

<h1>Blog</h1>
<div id="formContainer">
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" methon="POST" class="form" onsubmit="return validateForm();">
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
    <ul>
        <?php 
        if (mysqli_num_rows($res) > 0) {
		    foreach($records as $rowHolder){
		        echo '<li>'.$rowHolder['name'] . " " . $rowHolder['comment'].'</li>'; 
		    }
        } else {
		    echo "<h3>No Comments to display</h3>";
	    }
        ?>
    </ul>
</div>

</body>
</html>
