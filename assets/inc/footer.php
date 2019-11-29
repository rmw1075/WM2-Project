<footer class="footer">
		<div id="footerLinks">
			<a href="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbspResources&nbsp&nbsp&nbsp|</a><br>
			<?php
					$filename='./../inc/footer.php';
					if(file_exists($filename)){
					echo " Updated: " . date ("F d Y h:ia", filemtime($filename));
						}
					?>
		</div><!-- End of footerLinks -->
		
	</footer><!-- End of footer -->