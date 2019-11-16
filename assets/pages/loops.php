<!DOCTYPE html> 
<!-- LearnPy, Friday November 9 2019 -->
<html lang="en">
<head>
	<title>Loops - LearnPy</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/template.css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<script type="text/javascript" src=""></script>
</head>

<body>
	<div class="content">
		<?php
        $path = './';
        $page = 'Loops';
        include $path . '../inc/header2.php';
        ?>

		<div id="content">
			<h2></h2>
			<h2>For Loops</h2>
                <p>
                    Loops are structures in which a section of code is repeated multiple times. In <strong>for loops</strong>, the sequence is looped through a set number of times, based on certain conditions that are defined while creating the loop. A sequence in this case,can be a list, tuple, dictionary set, or string. This structure is useful to create when a sequence of code will need to be run multiple times, as it eliminates the need to rewrite a sequence.  
                </p>
                <p>
                    For loops are created by defining the structure that will be looped through, then using a for statement. The for statement follows the syntax <i>for x in y: // print(x) //x++</i>.
                </p>
                <!--screenshot-->
                <p>
                    This statement will print the phrase “hello world!” three times. This is because we are using the for loop to tell the program to print the phrase “hello world” and then increment the value of x, until the value of x equals the value of y, which is 3.
                </p>
        
        
            <h2>While Loops</h2>
                <p>
                    A <strong>while loop</strong> is a statement that executes code only when certain conditions hold true.  Unlike if statements, however, a while loop will loop back on itself, and re-execute as long as the statement continues to hold true.  Because of this, it is possible to create infinite loops with while loops, although these are rarely needed in a program.

                </p>
                <p>
                    In Python, a while loop is created using the statement <i>while x: // y,</i>  Often, “x” will be a statement such as <i>x &lt; 5,</i> and “y” will be a statement such as <i>print(“I love pizza”)</i>. 
                </p>
                <!--screenshot-->
                <p>
                    To ensure the loop does not run forever, a statement is generally needed after y that changes the value of x. This way, x will eventually no longer meet the conditions required for the loop to run, and it will stop executing. In this example, x was set to initially equal 2, and the while loop will execute while x is less than 5. To prevent it from running forever, x is increased by one after every print statement, meaning that x will at some point equal 5, and the loop will stop running.
                </p>
        
        
            <h2>If Statements</h2>
                <p>
                    Similar to while loops, <strong>if statements</strong> are blocks of code that only execute if certain conditions are met.  Unlike while loops, however, if statements will only run once, then the code will progress. If the criteria for the loop is not met at all, the program will skip past without running the code within the statement.

                </p>
                <p>
                    Sometimes, although not always, if statements are accompanied by an <strong>else statement</strong>. These statements are blocks of code that will execute only if the conditions of the if statement are NOT met. These statements are helpful if you want something specific to happen when conditions are not met, rather than just allowing the program to progress.
                </p>
                <p>
                    If statements are created by defining the condition you want to be met using the statement <i>if condition: // what should happen</i>. Often the condition will be a mathematical statement such as x=y, x&lt;y, etc.
                </p>
                <!--screenshot-->
        
                <p>
                    In this situation, the statement “Hi, x is 5” will print because the condition “x=5” has been met. If x had been set to equal another number, than nothing would happen when the code was run, because the statement was not met at all.
                </p>
                <!--screenshot-->
                <p>
                    In this version of the example, the statement “Hi, x is not 5” will run if x is set to equal any number other than 5. In this case, a line of code from this block is running no matter what the situation. The value of x will determine which line will run, however.
                </p>
		</div><!-- End of content -->
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
