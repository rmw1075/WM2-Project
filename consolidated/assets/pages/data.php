<!DOCTYPE html>
<!-- LearnPy, Friday November 9 2019 -->
<html lang="en">
<head>
	<title>Data Types - LearnPy</title>
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
        $page = 'Data';
        include $path . '../inc/header2.php';
        ?>

		<div id="content">

			 <h2>Variables</h2>
                <p>
                    One of the key data types used in Python, as well as other coding languages, <strong>variables</strong> are reserved memory locations that hold values. Variables in Python are typically short keywords, such as “num1,” “value,” or “cost.” When choosing a variable name, pick something that makes sense in the context of your program, and will be easy for you to remember later. This will help you when writing the program, since you’ll be able to easily tell what each variable is referencing.
                </p>
                <p>
                    In Python, variables are assigned by using the equals sign (=). For instance, the statement “num1 = 5” is assigning the value of 5 to the variable num1. This means that every time “num1” is called, Python will automatically reference the value “5” in its place. This variable will be referenced to 5 until its value is changed. The value of any variable can be changed by the user by reassigning it with the = sign.
                </p>
                <p>
                    Variables can refer to different kinds of data such as numeric, strings, etc.  Regardless of the type of data being held, a variable is created using the syntax <i>variableName = value</i>.
                </p>

                <h3>Example</h3>
                <p>
                    Besides referencing pieces of data, variables can also be used for computations. Say you assign “num1 = 5,” and “num2 = 3.” By writing the statement “num3 = num1 + num2,” the value of “num3” would automatically reference the number 8, since that’s the value of num1 + num2.
                </p>
                <!--screenshot-->


            <h2>Lists</h2>
                <p>
                    Although not used as often as variables, <strong>lists</strong> are another important structure used in Python. Lists are objects in Python that can be used to store multiple objects within them,  Think of a list like a basket that you place items into.  The basket contains the items and can be referenced as a basket, or the items can be taken out of it and used. Lists can be made up from data types such as integers, floats, strings, etc., however, all the objects in one list must be of the same data type.

                </p>
                <p>
                    To create a list in Python, the basic structure <i>ListName = [ ]</i> is used. The objects making up the list are placed within the square brackets and separated by commas. For example, <i>List1 = [“this”, “is”, “a”, “list”]</i> creates a list containing four strings: “this,” “is,” “a,” and “list.”
                </p>
                <!--screenshot-->
                <p>
                    To add items to a list that’s already been created, the word “append” is used. The syntax for this would be <i>ListName.append(“additional”)</i>. Any objects added to the list will be placed at the end, after the items already in the list.
                </p>
                <!--screenshot-->

                <p>
                    After adding objects to a list, a single object can be called. This is done by using print, and calling the position of the item we want to pull.  For example, if we wanted to pull “this” from List1 from above, we would call it as <i>print List1[0]</i>. This tells the program to print the object located in position 0, in this case, the string “this”.
                </p>
                <!--screenshot-->

                <h3>Note</h3>
                <p>
                    In Python, lists, arrays, and other data structures begin their count at 0. Therefore, to call the first object in a list, you would call 0, to call the second you would call 1, to call the third you would call 2, etc.
                </p>


            <h2>Strings</h2>
                <p>
                    One of the most essential data types in programming, a <strong>string</strong> is anything that is enclosed in “quotation marks,” or an object that is a list of characters. This means that words would be considered strings, but they must be enclosed in quotation marks for the program to read them correctly.
                </p>
                <p>
                    Strings can consist of multiple words, so long as they are all enclosed in quotation marks. For example <i>String1 = “This is a string”</i> is a valid string.
                </p>
                <p>
                    There are a number of different functions that can be performed on strings. Some of the most common are to determine its length, or pull a character located in a certain position within the string. Using <i>String1 = “This is a string”</i> as an example, performing the function <i>len(String1)</i> will calculate the length of the string, in terms of number of characters.
                </p>
                <!--screenshot-->

                <p>
                    Another important function is to pull the character located at a certain position in the string. Using <i>String1 = “This is a string”</i> again, performing the function <i>string[0]</i> would return the character located at position 0, in this case, “T.”  Note that strings, like lists, start counting with 0 rather than one.
                </p>

            <h2>Strings</h2>
                <p>
                    One of the easiest data types to understand in Python, an <strong>integer</strong> is a number that does not have a decimal point (a whole number). Integers are good for performing math, and are often assigned to variables if the same integer is used multiple times in one program. 8, 50000, and 13 would all be considered integers in Python.
                </p>

            <h2>Floats</h2>
                <p>
                    <strong>Floats</strong> are another common data type used in Python, and represent numbers that have a decimal place.
                </p>

		</div><!-- End of content -->
	</div>

	<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
    ?>
</body>
<script>
document.getElementById("data").style.color = "orange";
document.getElementById("learn").style.color = "orange";
</script>
</html>