<?php
		session_start();
        $path = './';
        $page = 'Data';
        include $path . '../inc/header2.php';
        ?>

        <?php
            require $path.'../../dbConnect.inc';            
		$sql = "SELECT content FROM modularSite where `page`='$page'";
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
	 echo "<script>document.getElementById(\"data\").style.color = \"orange\";document.getElementById(\"learn\").style.color = \"orange\";</script>";
    ?>

