</div><!-- End of content ID (started in headers) -->
</div><!-- End of content CLASS (started in headers) -->
<footer class="footer">
	<div id="footerLinks">
		<a href="../pages/sources.php" id="sources">Resources</a><br>
		<div id="modified">
			<?php
			$filename = './../inc/footer.php';
			if (file_exists($filename)) {
				echo " Updated: " . date("F d Y h:ia", filemtime($filename));
			}
			?>
		</div>
	</div><!-- End of footerLinks -->

</footer><!-- End of footer -->
</div>
</body>

</html>
