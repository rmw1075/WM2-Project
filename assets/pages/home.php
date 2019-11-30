<!-- Group 5 -->
<!-- LearnPy -->
<!-- Home -->
<!-- ISTE240-03 -->
<?php
session_start();
 ?>

            <?php
            $path = './';
            $page = 'Home';
            include $path . '../inc/header2.php';
            ?>
            
            <?php
            require $path.'../../dbConnect.inc';           
		$sql = "SELECT content FROM modularSite where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
	?>
	<?php
         include $path . '../inc/footer.php';
         mysqli_close($mysqli);
    ?>


