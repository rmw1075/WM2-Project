<?php
  	$path = './';
	$page = 'LearnPy Comment Form';
    require $path.'/../../../dbConnect.inc';
    
	if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['comment']!='' ){
		/*
			we are using client entered data - therefore we HAVE TO USE a prepared statement
            
            https://www.w3schools.com/php/php_mysql_prepared_statements.asp
            
			1)prepare my query
			2)bind
			3)execute
			4)close
		*/
		$stmt=$mysqli->prepare("INSERT INTO Python_comments (name, comment) VALUES(?, ?)");
        $name =  $_GET['name'] ;
        $comment = $_GET['comment'] ;
		$stmt->bind_param("ss", $name, $comment);
		$stmt->execute();
		$stmt->close();
	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  //get contents of table and send back...
      $sql = 'select name, comment from Python_comments';
	  $res=$mysqli->query($sql);
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;
		}
	  }
	}
    //print_r($records);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/ex08.css">
    <script  src="../assets/js/mouseover.js"></script>
</head>
<body>

<div id="formContainer">
    <form action="/~kcl4926/240/exer/ex08.php" methon="GET" class="form" onsubmit="return validateForm();">
    
<!--    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" methon="GET" class="form" onsubmit="return validateForm();"> -->

        <div class="FormHeader">
            <a href="../home.html">
            <img src="images/home_blue.png" id="home" alt="Home" title="Home"
            onmouseover="change('home', 'images/home_blue.png')"
            onmouseout="change('home', 'images/home_red.png')"/>
            </a>

            <br />Comment Form:
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
    <ul>
    <?php 
        //var_dump($records);
//        foreach($records as $rowHolder){
//            echo '<tr>';
//            echo'<td>' .$rowHolder['name'] . '</tr>';
//            echo'<td>' .$rowHolder['comment'] . '</tr>';
//            //echo'<td>' .$rowHolder['date'] . '</tr>';
//            echo '</tr>';
//        }  
        
        if (mysqli_num_rows($res) > 0) {
			 //var_dump($records);
		         foreach($records as $rowHolder){
			  echo '<li>'.$rowHolder['name'] . " " . $rowHolder['comment'].'</li>'; 
			}//end of foreach loop

			}// End of IF rows are selected
			else {
				echo "<h3>No Comments to display</h3>";
			}
    ?>
    </ul>
</div>
    

</body>
</html>

<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    //$name =  test_input($_GET['name']) ;
    //$comment =    test_input($_GET['comment']) ;

    if (isset($_GET['name'])){
     $name = test_input($_GET['name']);   
    }
    
    if (isset($_GET['comment'])){
     $comment = test_input($_GET['comment']);   
    }
//    echo "Name is: $name";
//    echo " ";
//    echo "Comment is: $comment";
?>
