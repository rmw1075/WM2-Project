<!-- Group 5 -->
<!-- LearnPy -->
<!-- Home -->
<!-- ISTE240-03 -->
<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Home -LearnPy</title>
        <link rel="stylesheet" type="text/css" href="../css/template.css" />
	    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	    <script type="text/javascript" src=""></script>
    </head>
    <body>

        <div class="content">
            <?php
            $path = './';
            $page = 'Home';
            include $path . '../inc/header2.php';
            ?>
            <div id="content">
                <p>
                    Welcome to LearnPy! Here, you will find tutorials, helpful information, and other resources to help you learn Python. This site is designed for beginners, and will go over some of the basics of Python, including its <a href="data.html">data types</a>, <a href="syntax.html">syntax</a>, and how to write <a href="loops.html">loops</a>.
                </p>
                <p>
                    Python is an interpreted, object-oriented programming language, Programs written in Python can be used for a number of different functions, such as reading a text file, making games like tic-tac-toe or hangman, and solving math problems of different complexities.  Python is a great language to learn if you’re interested in application development, data mining, or scripting.
                </p>
                <p>
                    Click on one of the links above to get started learning Python!
                </p>
            </div>
        </div>

    <footer class="footer">
		<div id="footerLinks">
			<a href="">Resources</a>
			|
			<a href="">More</a>
		</div><!-- End of footerLinks -->

	</footer><!-- End of footer -->
    </body>
</html>
