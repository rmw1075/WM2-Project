-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 03:44 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm4675`
--

-- --------------------------------------------------------

--
-- Table structure for table `modularSite`
--

CREATE TABLE `modularSite` (
  `id` int(100) UNSIGNED NOT NULL,
  `page` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text(6000) NOT NULL,
  `css` varchar(6000)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modularSite`
--

INSERT INTO `modularSite` (`id`,`page`, `content`) VALUES
(1,'Home', '<h1>Home</h1>
			            <p>
			                Welcome to LearnPy! Here, you will find tutorials, helpful information, and other resources to help you learn Python. This site is designed for beginners, and will go over some of the basics of Python, including its <a href="data.php">data types</a>, <a href="syntax.php">syntax</a>, and how to write <a href="loops.php">loops</a>.
			            </p>
			            <p>
			                Python is an interpreted, object-oriented programming language, Programs written in Python can be used for a number of different functions, such as reading a text file, making games like tic-tac-toe or hangman, and solving math problems of different complexities.  Python is a great language to learn if you’re interested in application development, data mining, or scripting.
			            </p>
			            <p>
			                Click on one of the links above to get started learning Python!
			            </p>
						
						<div id="auto1">
							<figure class="slide">
								<img id="auto1_slideshow" src="./../images/autoslide/1.png" alt="Home page Slideshow" title="Auto Slideshow1">  
								
							</figure>
						</div>'), (2,'Loops', '<h2></h2>
			<h2>For Loops</h2>
                <p>
                    Loops are structures in which a section of code is repeated multiple times. In <strong>for loops</strong>, the sequence is looped through a set number of times, based on certain conditions that are defined while creating the loop. A sequence in this case,can be a list, tuple, dictionary set, or string. This structure is useful to create when a sequence of code will need to be run multiple times, as it eliminates the need to rewrite a sequence.
                </p>
                <p>
                    For loops are created by defining the structure that will be looped through, then using a for statement. The for statement follows the syntax <i>for x in y: // print(x) //x++</i>.
                </p>
                <!--screenshot-->
				<figure class="codeScreen" style="max-width:766px;">
					<img id="forCode" src="./../images/codeImages/forloopsCode.png" alt="for Loops" title="for Loops">
				</figure>
                <p>
                    In the above example, the sentence “Hi, I’ve ran through the loop x times” will print, with the value of x changing on each iteration of the loop. Because the loop value of x is increased by one each time and the sentence will only print for the values 1-5, the loop will print four times. This can be seen in the output below:
                </p>
				<figure class="codeScreen" style="max-width:316px;">
					<img id="forOut" src="./../images/codeImages/forloopsOut.png" alt="for Loops output" title="for Loops output ">
				</figure>

            <h2>While Loops</h2>
                <p>
                    A <strong>while loop</strong> is a statement that executes code only when certain conditions hold true.  Unlike if statements, however, a while loop will loop back on itself, and re-execute as long as the statement continues to hold true.  Because of this, it is possible to create infinite loops with while loops, although these are rarely needed in a program.

                </p>
                <p>
                    In Python, a while loop is created using the statement <i>while x: // y,</i>  Often, “x” will be a statement such as <i>x &lt; 5,</i> and “y” will be a statement such as <i>print(“I love pizza”)</i>.
                </p>
                <!--screenshot-->
				<figure class="codeScreen" style="max-width:273px;">
					<img id="whileCode" src="./../images/codeImages/whileCode.png" alt="while loops" title="while loops ">
				</figure>
                <p>
                    To ensure the loop does not run forever, a statement is generally needed after y that changes the value of x. This way, x will eventually no longer meet the conditions required for the loop to run, and it will stop executing. In this example, x was set to initially equal 2, and the while loop will execute while x is less than 5. To prevent it from running forever, x is increased by one after every print statement, meaning that x will at some point equal 5, and the loop will stop running.
                </p>
				<figure class="codeScreen" style="max-width:333px;">
					<img id="whileOut" src="./../images/codeImages/whileOut.png" alt="while loops output" title="while loops output">
				</figure>

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
				<figure class="codeScreen" style="max-width:527px;">
					<img id="ifCode" src="./../images/codeImages/ifCode.png" alt="if loops" title="if loops ">
				</figure>

                <p>
                    In this situation, the statement “Hi, x is 5” will print because the condition “x<8” has been met. The statement will continue to print with a changing value of x, until x eventually becomes greater than or equal to 8. At this point, the elif statement will run instead.
                </p>
                <!--screenshot-->
				<figure class="codeScreen" style="max-width:353px;">
					<img id="ifOut" src="./../images/codeImages/ifOut.png" alt="if loops output" title="if loops output">
				</figure>
	'), (3,'Data', '<h2>Variables</h2>
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
				<div class="swipe-slideshow1">
				<div class ="mySlides" style="display:block;">
					<figure class="codeScreen" style="max-width:274px;">
						<img class="swipepic1" src="./../images/codeImages/swipe/1.png" alt="variables code" title="variables code">
						<figcaption class="Text">Code</figcaption>
					</figure>
				</div>

				<div class ="mySlides">
					<figure class="codeScreen" style="max-width:323px;">
						<img class="swipepic1" src="./../images/codeImages/swipe/2.png" alt="Variables Output" title="Variables Output">
						<figcaption class="Text">Output</figcaption>
					</figure>  
				</div> 
				<a class="previous" onclick=plusSlides(-1)>&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>

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
				<figure class="codeScreen" style="max-width:451px;">
					<img id="listCode" src="./../images/codeImages/listsCode.png" alt="Lists" title="Lists">
				</figure>

                <p>
                    After adding objects to a list, a single object can be called. This is done by using print, and calling the position of the item we want to pull.  For example, if we wanted to pull “this” from List1 from above, we would call it as <i>print List1[0]</i>. This tells the program to print the object located in position 0, in this case, the string “this”.
                </p>
                <!--screenshot-->
				<figure class="codeScreen" style="max-width:344px;">
					<img id="listOut" src="./../images/codeImages/listsOut.png" alt="Lists Output" title="Lists output">
				</figure>

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
				<figure class="codeScreen" style="max-width:373px;">
					<img id="Strings" src="./../images/codeImages/stringsCode.png" alt="Strings" title="Strings">
				</figure>

                <p>
                    Another important function is to pull the character located at a certain position in the string. Using <i>String1 = “This is a string”</i> again, performing the function <i>string[0]</i> would return the character located at position 0, in this case, “T.”  Note that strings, like lists, start counting with 0 rather than one.
                </p>
				<figure class="codeScreen" style="max-width:373px;">
					<img id="Strings" src="./../images/codeImages/stringsOut.png" alt="Strings Out" title="Strings Out">
				</figure>
            <h2>Integers</h2>
                <p>
                    One of the easiest data types to understand in Python, an <strong>integer</strong> is a number that does not have a decimal point (a whole number). Integers are good for performing math, and are often assigned to variables if the same integer is used multiple times in one program. 8, 50000, and 13 would all be considered integers in Python.
                </p>
				<figure class="codeScreen" style="max-width:345px;">
					<img id="ints" src="./../images/codeImages/integersCode.png" alt="ints" title="ints">
				</figure>
				<figure class="codeScreen" style="max-width:320px;">
					<img id="ints" src="./../images/codeImages/integersOut.png" alt="ints out" title="ints out">
				</figure>

            <h2>Floats</h2>
                <p>
                    <strong>Floats</strong> are another common data type used in Python, and represent numbers that have a decimal place.
					
                </p>
				<figure class="codeScreen" style="max-width:585px;">
					<img id="floats" src="./../images/codeImages/floatsCode.png" alt="floats" title="floats">
				</figure>
				<figure class="codeScreen" style="max-width:312px;">
					<img id="floats" src="./../images/codeImages/floatsOut.png" alt="floats out" title="floats out">
				</figure>
				<p></p>
				<br>
'), (4,'Syntax', '<h2>Indentation</h2>
                <p>
                    In Python, code indentation is extremely important. Unlike other languages where the spaces do not matter, Python will return errors if indentation is ignored. Indentation at the start of a line indicates that the code on that line belongs in a block with the code above it.
                </p>
                <!--screenshot-->
				<figure class="codeScreen" style="max-width:768px;">
					<img id="indent" src="./../images/codeImages/indentCode.png" alt="indent" title="indent">
				</figure>
                <p>
                    In this case, the indented print statement is used to show that this statement is connected to the for loops assignment statement above it.
                </p>


            <h2>Variable Declaration</h2>
                <p>
                    Many programming languages have specific rules for how to declare a new variable. In Python, however, a variable is declared simply by setting a variable name or character equal to something else. You do not have to declare the variable’s type, or use a certain command to do so.
                </p>
                <!--screenshot (x = number // y = “phrase”)-->
				<figure class="codeScreen" style="max-width:459px;">
					<img id="declaration" src="./../images/codeImages/declaration.png" alt="declaration" title="declaration">
				</figure>


            <h2>Comments</h2>
                <p>
                    Comments are an important part of coding, as they tell other programmers what your code does, or can remind you if you return to a program after not looking at it for a while. Different programs have different syntax for comments, but in Python, a comment begins with a #, and includes the entire line. This means that every line that you want to be commented out must begin with a #.
                </p>
                <!--screenshot (#Start a comment with a hashtag or something like that)-->
				<figure class="codeScreen" style="max-width:778px;">
					<img id="comment" src="./../images/codeImages/comment.png" alt="comment" title="comment">
				</figure>

            <h2>Import Statements</h2>
                <p>
                    In Python, files can be linked to each other and called within another file. A .py (Python) file is known as a <i>module</i>. Modules can be imported into other Python files by using the <i>import</i> statement. The syntax for this is <i>import filename</i>. The import statement MUST go at the top of a Python file.
                </p>
				<figure class="codeScreen" style="max-width:765px;">
					<img id="import" src="./../images/codeImages/import.png" alt="import" title="import">
				</figure>
				<br><br><br>'), (5, 'Resources', '<table>
    <tr>
    <td>https://help.formstack.com/hc/en-us/articles/360019204732-Submit-Actions</td>
    <td>Copied, cropped & resized  and used in the blog thank you webpage</td> 
    <td><img alt="Thank You Image" title="Thank You" src="../images/ty.jpeg"></td>
  </tr>
  <tr>
    <td>https://realpython.com/start-here/</td>
    <td>Copied, cropped & resized  and used in gallery of home.php webpage</td>
    <td><img alt="Boy wondering about the Python logo" title="Boy wondering about the Python logo" src="../images/autoslide/1.png"></td>
  </tr>
  <tr>
    <td>http://new.whatmobile.net/is-python-programming-language-difficult-to-learn/</td>
    <td>Copied, cropped & resized  and used in gallery of home.php webpage</td>
    <td><img alt="Python Logo" title="Python Logo" src="../images/autoslide/2.png"></td>
  </tr>
  <tr>
    <td>https://www.forbes.com/sites/forbestechcouncil/2019/02/22/want-to-learn-coding-check-out-these-resources-recommended-by-tech-experts/#6c4f555d5d6f</td>
    <td>Copied, cropped & resized  and used in gallery of home.php webpage</td>
    <td><img alt="Python Code Example" title="Python Code Example" src="../images/autoslide/3.png"></td>
  </tr>
    
    <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Variable Code Example" title="Variable Code Example" src="../images/codeImages/swipe/1.png">
  </tr>
    
    <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Variable Code Output" title="Variable Code Output" src="../images/codeImages/swipe/2.png">
  </tr>
    
     <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Lists Code Example" title="Lists Code Example" src="../images/codeImages/listsCode.png">
  </tr>
    
    <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Lists Code Output" title="Lists Code Output" src="../images/codeImages/listsOut.png">
  </tr>
    
    
     <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Strings Code Example" title="Strings Code Example" src="../images/codeImages/stringsCode.png">
  </tr>
    
    
    <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Strings Code Output" title="Strings Code Output" src="../images/codeImages/stringsOut.png">
  </tr>
    
     <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Integer Code Example" title="Integer Code Example" src="../images/codeImages/integersCode.png">
  </tr>
    
         <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Interger Code Output" title="Integer Code Output" src="../images/codeImages/integersOut.png">
  </tr>
    
         <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Floats Code Example" title="Floats Code Example" src="../images/codeImages/floatsCode.png">

  </tr>
    
          <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>
    <td><img alt="Floats Code Output" title="Floats Code Output" src="../images/codeImages/floatsOut.png">


  </tr>
    
          <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>
    <td><img alt="For Loops Code Example" title="For Loops Code Example" src="../images/codeImages/forloopsCode.png">

  </tr>
    
    
            <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>
    <td><img alt="For Loops Code Output" title="For Loops Code Output" src="../images/codeImages/forloopsOut.png">

  </tr>
    
             <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>
    <td><img alt="While Loops Example" title="While Loops Example" src="../images/codeImages/whileCode.png">


  </tr>
    
              <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>
    <td><img alt="While Loops Output" title="While Loops Output" src="../images/codeImages/whileOut.png">


  </tr>
    
                  <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>
    <td><img alt="If Statement Example" title="If Statement Example" src="../images/codeImages/ifCode.png">

  </tr>
    
                    <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>
    <td><img alt="If Statement Output" title="If Statement Output" src="../images/codeImages/ifOut.png">

  </tr>
    
                      <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>
    <td><img alt="Indent Code Example" title="Indent Code Example" src="../images/codeImages/indentCode.png">

  </tr>
    
                          <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>
    <td><img alt="Variable Declaration Example" title="Variable Declaration Example" src="../images/codeImages/declaration.png">


  </tr>
    
                  <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>
    <td><img alt="Comment Example" title="Comment Example" src="../images/codeImages/comment.png">

  </tr>
    
         <tr>
    <td>Self made graphic</td>
    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>
    <td><img alt="Import Example" title="Import Example" src="../images/codeImages/import.png">

  </tr>
                                 
<tr>
    <td style="border: none;">
        <h3>Content Resources: </h3>
        
        <ul>
            <li>https://www.w3schools.com/python/python_conditions.asp</li>
            <li>https://www.w3schools.com/python/python_while_loops.asp</li>
            <li>https://www.w3schools.com/python/python_for_loops.asp</li>
            <li>https://www.w3schools.com/python/python_syntax.asp</li>
            <li>https://www.digitalocean.com/community/tutorials/how-to-import-modules-in-python-3</li>
        </ul>    
    </td>
</tr>
   
    
    


</table>
');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modularSite`
--
ALTER TABLE `modularSite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modularSite`
--
ALTER TABLE `modularSite`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
