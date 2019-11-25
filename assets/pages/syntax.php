<!DOCTYPE html>
<!-- LearnPy, Friday November 9 2019 -->
<html lang="en">
<head>
	<title>Syntax - LearnPy</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/template.css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<script type="text/javascript" src=""></script>
</head>

<body>
	<div class="content">
		<?php
		session_start();
        $path = './';
        $page = 'Syntax';
        include $path . '../inc/header2.php';
		?>

		<div id="content">

			<h2>Indentation</h2>
                <p>
                    In Python, code indentation is extremely important. Unlike other languages where the spaces do not matter, Python will return errors if indentation is ignored. Indentation at the start of a line indicates that the code on that line belongs in a block with the code above it.
                </p>
                <!--screenshot-->
                <p>
                    In this case, the indented print statement is used to show that this statement is connected to the [changed based on whats in screenshot] statement above it.
                </p>


            <h2>Variable Declaration</h2>
                <p>
                    Many programming languages have specific rules for how to declare a new variable. In Python, however, a variable is declared simply by setting a variable name or character equal to something else. You do not have to declare the variable’s type, or use a certain command to do so.
                </p>
                <!--screenshot (x = number // y = “phrase”)-->


            <h2>Comments</h2>
                <p>
                    Comments are an important part of coding, as they tell other programmers what your code does, or can remind you if you return to a program after not looking at it for a while. Different programs have different syntax for comments, but in Python, a comment begins with a #, and includes the entire line. This means that every line that you want to be commented out must begin with a #.
                </p>
                <!--screenshot (#Start a comment with a hashtag or something like that)-->


            <h2>Comments</h2>
                <p>
                    Comments are an important part of coding, as they tell other programmers what your code does, or can remind you if you return to a program after not looking at it for a while. Different programs have different syntax for comments, but in Python, a comment begins with a #, and includes the entire line. This means that every line that you want to be commented out must begin with a #.
                </p>

            <h2>Import Statements</h2>
                <p>
                    In Python, files can be linked to each other and called within another file. A .py (Python) file is known as a <i>module</i>. Modules can be imported into other Python files by using the <i>import</i> statement. The syntax for this is <i>import filename</i>. The import statement MUST go at the top of a Python file.
                </p>
		</div><!-- End of content -->
	</div>

	<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
    ?>

	</footer><!-- End of footer -->
</body>
<script>
document.getElementById("syntax").style.color = "orange";
document.getElementById("learn").style.color = "orange";
</script>
</html>
