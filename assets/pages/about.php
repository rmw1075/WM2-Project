<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/template.css">
    <title>Blog</title>
</head>
<body>
    
	
	<div class="content">
		<?php
		session_start();
		$path = './';
		$page = 'Help';
		include $path . '../inc/header3.php';
		?>
		<div id="content">
			<h2>About us</h2>
			
			<br>
			<h3>Carr, Lizzy</h3>
			<p>For this project, I wrote the content for the “learn” parts of the site and built the html files that were used to create these pages.  I also wrote the javascript files used for all the slideshows on this site, and provided user testing for it.  Additionally, I took notes at team meetings, kept track of what tasks still needed to be accomplished, and made sure the other team members stuck to the timeline we had made.
			</p>
			
			<br><br>
			<h3>Love, Kyrren</h3>
			<p>
			</p>
			
			<br><br>
			<h3>Mathur, Sagar</h3>
			<p>For this project, I was responsible to make one of the two sample index pages and also for the html and css code for the pages. I got together the learning pages by merging the template html and css with the content for these pages. I was mainly responsible for making the four learning pages and the resources page modular by using myphp admin to create tables and populate them with content. I also designed and coded the resources page for our website.
			</p>
			
			<br><br>
			<h3>Twomey, Alex</h3>
			<p>I was responsible for the design aspects of the site. For the design doc I made wireframes and color mockups for various pages on the site. When it came to implementing the design doc I created a template html and css file to be used on almost every page. I also: Integrated the content written by other members into this template, created media queries so that the site would be mobile friendly, and integrated the slideshows and code screenshots into the site. 
			</p>
			
			<br><br>
			<h3>Weiss, Ryan</h3>
			<p>My responsibility was to lead the team to completion and to be there for any support and troubleshooting along the way. I reviewed, integrated, and maintained the website repository, and fixed much of the errors we encountered. Additionally, I completed many aspects of the website, including the quiz, login/register, backend, and index page. I mainly worked on any PHP, Javascript, and SQL assignments required for the website. 
			</p>
			<br><br>
		</div>
		
	</div>
	
	
	
	<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
		 echo "<script>document.getElementById(\"about\").style.color = \"orange\";</script>";
    ?>
</body>
</html>
