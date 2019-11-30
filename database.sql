CREATE DATABASE  IF NOT EXISTS `rmw1075` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `rmw1075`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: rmw1075
-- ------------------------------------------------------
-- Server version	5.7.28-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `modularsite`
--

DROP TABLE IF EXISTS `modularsite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modularsite` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `css` varchar(6000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modularsite`
--

LOCK TABLES `modularsite` WRITE;
/*!40000 ALTER TABLE `modularsite` DISABLE KEYS */;
INSERT INTO `modularsite` VALUES (1,'Home','<h1>Home</h1>\n			            <p>\n			                Welcome to LearnPy! Here, you will find tutorials, helpful information, and other resources to help you learn Python. This site is designed for beginners, and will go over some of the basics of Python, including its <a href=\"data.php\">data types</a>, <a href=\"syntax.php\">syntax</a>, and how to write <a href=\"loops.php\">loops</a>.\n			            </p>\n			            <p>\n			                Python is an interpreted, object-oriented programming language, Programs written in Python can be used for a number of different functions, such as reading a text file, making games like tic-tac-toe or hangman, and solving math problems of different complexities.  Python is a great language to learn if you’re interested in application development, data mining, or scripting.\n			            </p>\n			            <p>\n			                Click on one of the links above to get started learning Python!\n			            </p>\n						\n						<div id=\"auto1\">\n							<figure class=\"slide\">\n								<img id=\"auto1_slideshow\" src=\"./../images/autoslide/1.png\" alt=\"Home page Slideshow\" title=\"Auto Slideshow1\">  \n								\n							</figure>\n						</div>',NULL),(2,'Loops','<h2></h2>\n			<h2>For Loops</h2>\n                <p>\n                    Loops are structures in which a section of code is repeated multiple times. In <strong>for loops</strong>, the sequence is looped through a set number of times, based on certain conditions that are defined while creating the loop. A sequence in this case,can be a list, tuple, dictionary set, or string. This structure is useful to create when a sequence of code will need to be run multiple times, as it eliminates the need to rewrite a sequence.\n                </p>\n                <p>\n                    For loops are created by defining the structure that will be looped through, then using a for statement. The for statement follows the syntax <i>for x in y: // print(x) //x++</i>.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:766px;\">\n					<img id=\"forCode\" src=\"./../images/codeImages/forloopsCode.png\" alt=\"for Loops\" title=\"for Loops\">\n				</figure>\n                <p>\n                    In the above example, the sentence “Hi, I’ve ran through the loop x times” will print, with the value of x changing on each iteration of the loop. Because the loop value of x is increased by one each time and the sentence will only print for the values 1-5, the loop will print four times. This can be seen in the output below:\n                </p>\n				<figure class=\"codeScreen\" style=\"max-width:316px;\">\n					<img id=\"forOut\" src=\"./../images/codeImages/forloopsOut.png\" alt=\"for Loops output\" title=\"for Loops output \">\n				</figure>\n\n            <h2>While Loops</h2>\n                <p>\n                    A <strong>while loop</strong> is a statement that executes code only when certain conditions hold true.  Unlike if statements, however, a while loop will loop back on itself, and re-execute as long as the statement continues to hold true.  Because of this, it is possible to create infinite loops with while loops, although these are rarely needed in a program.\n\n                </p>\n                <p>\n                    In Python, a while loop is created using the statement <i>while x: // y,</i>  Often, “x” will be a statement such as <i>x &lt; 5,</i> and “y” will be a statement such as <i>print(“I love pizza”)</i>.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:273px;\">\n					<img id=\"whileCode\" src=\"./../images/codeImages/whileCode.png\" alt=\"while loops\" title=\"while loops \">\n				</figure>\n                <p>\n                    To ensure the loop does not run forever, a statement is generally needed after y that changes the value of x. This way, x will eventually no longer meet the conditions required for the loop to run, and it will stop executing. In this example, x was set to initially equal 2, and the while loop will execute while x is less than 5. To prevent it from running forever, x is increased by one after every print statement, meaning that x will at some point equal 5, and the loop will stop running.\n                </p>\n				<figure class=\"codeScreen\" style=\"max-width:333px;\">\n					<img id=\"whileOut\" src=\"./../images/codeImages/whileOut.png\" alt=\"while loops output\" title=\"while loops output\">\n				</figure>\n\n            <h2>If Statements</h2>\n                <p>\n                    Similar to while loops, <strong>if statements</strong> are blocks of code that only execute if certain conditions are met.  Unlike while loops, however, if statements will only run once, then the code will progress. If the criteria for the loop is not met at all, the program will skip past without running the code within the statement.\n\n                </p>\n                <p>\n                    Sometimes, although not always, if statements are accompanied by an <strong>else statement</strong>. These statements are blocks of code that will execute only if the conditions of the if statement are NOT met. These statements are helpful if you want something specific to happen when conditions are not met, rather than just allowing the program to progress.\n                </p>\n                <p>\n                    If statements are created by defining the condition you want to be met using the statement <i>if condition: // what should happen</i>. Often the condition will be a mathematical statement such as x=y, x&lt;y, etc.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:527px;\">\n					<img id=\"ifCode\" src=\"./../images/codeImages/ifCode.png\" alt=\"if loops\" title=\"if loops \">\n				</figure>\n\n                <p>\n                    In this situation, the statement “Hi, x is 5” will print because the condition “x<8” has been met. The statement will continue to print with a changing value of x, until x eventually becomes greater than or equal to 8. At this point, the elif statement will run instead.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:353px;\">\n					<img id=\"ifOut\" src=\"./../images/codeImages/ifOut.png\" alt=\"if loops output\" title=\"if loops output\">\n				</figure>\n',NULL),(3,'Data','<h2>Variables</h2>\n                <p>\n                    One of the key data types used in Python, as well as other coding languages, <strong>variables</strong> are reserved memory locations that hold values. Variables in Python are typically short keywords, such as “num1,” “value,” or “cost.” When choosing a variable name, pick something that makes sense in the context of your program, and will be easy for you to remember later. This will help you when writing the program, since you’ll be able to easily tell what each variable is referencing.\n                </p>\n                <p>\n                    In Python, variables are assigned by using the equals sign (=). For instance, the statement “num1 = 5” is assigning the value of 5 to the variable num1. This means that every time “num1” is called, Python will automatically reference the value “5” in its place. This variable will be referenced to 5 until its value is changed. The value of any variable can be changed by the user by reassigning it with the = sign.\n                </p>\n                <p>\n                    Variables can refer to different kinds of data such as numeric, strings, etc.  Regardless of the type of data being held, a variable is created using the syntax <i>variableName = value</i>.\n                </p>\n\n                <h3>Example</h3>\n                <p>\n                    Besides referencing pieces of data, variables can also be used for computations. Say you assign “num1 = 5,” and “num2 = 3.” By writing the statement “num3 = num1 + num2,” the value of “num3” would automatically reference the number 8, since that’s the value of num1 + num2.\n                </p>\n                <!--screenshot-->\n				<div class=\"swipe-slideshow1\">\n				<div class =\"mySlides\" style=\"display:block;\">\n					<figure class=\"codeScreen\" style=\"max-width:274px;\">\n						<img class=\"swipepic1\" src=\"./../images/codeImages/swipe/1.png\" alt=\"variables code\" title=\"variables code\">\n						<figcaption class=\"Text\">Code</figcaption>\n					</figure>\n				</div>\n\n				<div class =\"mySlides\">\n					<figure class=\"codeScreen\" style=\"max-width:323px;\">\n						<img class=\"swipepic1\" src=\"./../images/codeImages/swipe/2.png\" alt=\"Variables Output\" title=\"Variables Output\">\n						<figcaption class=\"Text\">Output</figcaption>\n					</figure>  \n				</div> \n				<a class=\"previous\" onclick=plusSlides(-1)>&#10094;</a>\n				<a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>\n				</div>\n\n            <h2>Lists</h2>\n                <p>\n                    Although not used as often as variables, <strong>lists</strong> are another important structure used in Python. Lists are objects in Python that can be used to store multiple objects within them,  Think of a list like a basket that you place items into.  The basket contains the items and can be referenced as a basket, or the items can be taken out of it and used. Lists can be made up from data types such as integers, floats, strings, etc., however, all the objects in one list must be of the same data type.\n\n                </p>\n                <p>\n                    To create a list in Python, the basic structure <i>ListName = [ ]</i> is used. The objects making up the list are placed within the square brackets and separated by commas. For example, <i>List1 = [“this”, “is”, “a”, “list”]</i> creates a list containing four strings: “this,” “is,” “a,” and “list.”\n                </p>\n                <!--screenshot-->\n                <p>\n                    To add items to a list that’s already been created, the word “append” is used. The syntax for this would be <i>ListName.append(“additional”)</i>. Any objects added to the list will be placed at the end, after the items already in the list.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:451px;\">\n					<img id=\"listCode\" src=\"./../images/codeImages/listsCode.png\" alt=\"Lists\" title=\"Lists\">\n				</figure>\n\n                <p>\n                    After adding objects to a list, a single object can be called. This is done by using print, and calling the position of the item we want to pull.  For example, if we wanted to pull “this” from List1 from above, we would call it as <i>print List1[0]</i>. This tells the program to print the object located in position 0, in this case, the string “this”.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:344px;\">\n					<img id=\"listOut\" src=\"./../images/codeImages/listsOut.png\" alt=\"Lists Output\" title=\"Lists output\">\n				</figure>\n\n                <h3>Note</h3>\n                <p>\n                    In Python, lists, arrays, and other data structures begin their count at 0. Therefore, to call the first object in a list, you would call 0, to call the second you would call 1, to call the third you would call 2, etc.\n                </p>\n\n\n            <h2>Strings</h2>\n                <p>\n                    One of the most essential data types in programming, a <strong>string</strong> is anything that is enclosed in “quotation marks,” or an object that is a list of characters. This means that words would be considered strings, but they must be enclosed in quotation marks for the program to read them correctly.\n                </p>\n                <p>\n                    Strings can consist of multiple words, so long as they are all enclosed in quotation marks. For example <i>String1 = “This is a string”</i> is a valid string.\n                </p>\n                <p>\n                    There are a number of different functions that can be performed on strings. Some of the most common are to determine its length, or pull a character located in a certain position within the string. Using <i>String1 = “This is a string”</i> as an example, performing the function <i>len(String1)</i> will calculate the length of the string, in terms of number of characters.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:373px;\">\n					<img id=\"Strings\" src=\"./../images/codeImages/stringsCode.png\" alt=\"Strings\" title=\"Strings\">\n				</figure>\n\n                <p>\n                    Another important function is to pull the character located at a certain position in the string. Using <i>String1 = “This is a string”</i> again, performing the function <i>string[0]</i> would return the character located at position 0, in this case, “T.”  Note that strings, like lists, start counting with 0 rather than one.\n                </p>\n				<figure class=\"codeScreen\" style=\"max-width:373px;\">\n					<img id=\"Strings\" src=\"./../images/codeImages/stringsOut.png\" alt=\"Strings Out\" title=\"Strings Out\">\n				</figure>\n            <h2>Integers</h2>\n                <p>\n                    One of the easiest data types to understand in Python, an <strong>integer</strong> is a number that does not have a decimal point (a whole number). Integers are good for performing math, and are often assigned to variables if the same integer is used multiple times in one program. 8, 50000, and 13 would all be considered integers in Python.\n                </p>\n				<figure class=\"codeScreen\" style=\"max-width:345px;\">\n					<img id=\"ints\" src=\"./../images/codeImages/integersCode.png\" alt=\"ints\" title=\"ints\">\n				</figure>\n				<figure class=\"codeScreen\" style=\"max-width:320px;\">\n					<img id=\"ints\" src=\"./../images/codeImages/integersOut.png\" alt=\"ints out\" title=\"ints out\">\n				</figure>\n\n            <h2>Floats</h2>\n                <p>\n                    <strong>Floats</strong> are another common data type used in Python, and represent numbers that have a decimal place.\n					\n                </p>\n				<figure class=\"codeScreen\" style=\"max-width:585px;\">\n					<img id=\"floats\" src=\"./../images/codeImages/floatsCode.png\" alt=\"floats\" title=\"floats\">\n				</figure>\n				<figure class=\"codeScreen\" style=\"max-width:312px;\">\n					<img id=\"floats\" src=\"./../images/codeImages/floatsOut.png\" alt=\"floats out\" title=\"floats out\">\n				</figure>\n				<p></p>\n				<br>\n',NULL),(4,'Syntax','<h2>Indentation</h2>\n                <p>\n                    In Python, code indentation is extremely important. Unlike other languages where the spaces do not matter, Python will return errors if indentation is ignored. Indentation at the start of a line indicates that the code on that line belongs in a block with the code above it.\n                </p>\n                <!--screenshot-->\n				<figure class=\"codeScreen\" style=\"max-width:768px;\">\n					<img id=\"indent\" src=\"./../images/codeImages/indentCode.png\" alt=\"indent\" title=\"indent\">\n				</figure>\n                <p>\n                    In this case, the indented print statement is used to show that this statement is connected to the for loops assignment statement above it.\n                </p>\n\n\n            <h2>Variable Declaration</h2>\n                <p>\n                    Many programming languages have specific rules for how to declare a new variable. In Python, however, a variable is declared simply by setting a variable name or character equal to something else. You do not have to declare the variable’s type, or use a certain command to do so.\n                </p>\n                <!--screenshot (x = number // y = “phrase”)-->\n				<figure class=\"codeScreen\" style=\"max-width:459px;\">\n					<img id=\"declaration\" src=\"./../images/codeImages/declaration.png\" alt=\"declaration\" title=\"declaration\">\n				</figure>\n\n\n            <h2>Comments</h2>\n                <p>\n                    Comments are an important part of coding, as they tell other programmers what your code does, or can remind you if you return to a program after not looking at it for a while. Different programs have different syntax for comments, but in Python, a comment begins with a #, and includes the entire line. This means that every line that you want to be commented out must begin with a #.\n                </p>\n                <!--screenshot (#Start a comment with a hashtag or something like that)-->\n				<figure class=\"codeScreen\" style=\"max-width:778px;\">\n					<img id=\"comment\" src=\"./../images/codeImages/comment.png\" alt=\"comment\" title=\"comment\">\n				</figure>\n\n            <h2>Import Statements</h2>\n                <p>\n                    In Python, files can be linked to each other and called within another file. A .py (Python) file is known as a <i>module</i>. Modules can be imported into other Python files by using the <i>import</i> statement. The syntax for this is <i>import filename</i>. The import statement MUST go at the top of a Python file.\n                </p>\n				<figure class=\"codeScreen\" style=\"max-width:765px;\">\n					<img id=\"import\" src=\"./../images/codeImages/import.png\" alt=\"import\" title=\"import\">\n				</figure>\n				<br><br><br>',NULL),(5,'Resources','<table>\n    <tr>\n    <td>https://help.formstack.com/hc/en-us/articles/360019204732-Submit-Actions</td>\n    <td>Copied, cropped & resized  and used in the blog thank you webpage</td> \n    <td><img alt=\"Thank You Image\" title=\"Thank You\" src=\"../images/ty.jpeg\"></td>\n  </tr>\n  <tr>\n    <td>https://realpython.com/start-here/</td>\n    <td>Copied, cropped & resized  and used in gallery of home.php webpage</td>\n    <td><img alt=\"Boy wondering about the Python logo\" title=\"Boy wondering about the Python logo\" src=\"../images/autoslide/1.png\"></td>\n  </tr>\n  <tr>\n    <td>http://new.whatmobile.net/is-python-programming-language-difficult-to-learn/</td>\n    <td>Copied, cropped & resized  and used in gallery of home.php webpage</td>\n    <td><img alt=\"Python Logo\" title=\"Python Logo\" src=\"../images/autoslide/2.png\"></td>\n  </tr>\n  <tr>\n    <td>https://www.forbes.com/sites/forbestechcouncil/2019/02/22/want-to-learn-coding-check-out-these-resources-recommended-by-tech-experts/#6c4f555d5d6f</td>\n    <td>Copied, cropped & resized  and used in gallery of home.php webpage</td>\n    <td><img alt=\"Python Code Example\" title=\"Python Code Example\" src=\"../images/autoslide/3.png\"></td>\n  </tr>\n    \n    <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Variable Code Example\" title=\"Variable Code Example\" src=\"../images/codeImages/swipe/1.png\">\n  </tr>\n    \n    <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Variable Code Output\" title=\"Variable Code Output\" src=\"../images/codeImages/swipe/2.png\">\n  </tr>\n    \n     <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Lists Code Example\" title=\"Lists Code Example\" src=\"../images/codeImages/listsCode.png\">\n  </tr>\n    \n    <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Lists Code Output\" title=\"Lists Code Output\" src=\"../images/codeImages/listsOut.png\">\n  </tr>\n    \n    \n     <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Strings Code Example\" title=\"Strings Code Example\" src=\"../images/codeImages/stringsCode.png\">\n  </tr>\n    \n    \n    <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Strings Code Output\" title=\"Strings Code Output\" src=\"../images/codeImages/stringsOut.png\">\n  </tr>\n    \n     <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Integer Code Example\" title=\"Integer Code Example\" src=\"../images/codeImages/integersCode.png\">\n  </tr>\n    \n         <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Interger Code Output\" title=\"Integer Code Output\" src=\"../images/codeImages/integersOut.png\">\n  </tr>\n    \n         <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Floats Code Example\" title=\"Floats Code Example\" src=\"../images/codeImages/floatsCode.png\">\n\n  </tr>\n    \n          <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of data.php webpage</td>\n    <td><img alt=\"Floats Code Output\" title=\"Floats Code Output\" src=\"../images/codeImages/floatsOut.png\">\n\n\n  </tr>\n    \n          <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>\n    <td><img alt=\"For Loops Code Example\" title=\"For Loops Code Example\" src=\"../images/codeImages/forloopsCode.png\">\n\n  </tr>\n    \n    \n            <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>\n    <td><img alt=\"For Loops Code Output\" title=\"For Loops Code Output\" src=\"../images/codeImages/forloopsOut.png\">\n\n  </tr>\n    \n             <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>\n    <td><img alt=\"While Loops Example\" title=\"While Loops Example\" src=\"../images/codeImages/whileCode.png\">\n\n\n  </tr>\n    \n              <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>\n    <td><img alt=\"While Loops Output\" title=\"While Loops Output\" src=\"../images/codeImages/whileOut.png\">\n\n\n  </tr>\n    \n                  <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>\n    <td><img alt=\"If Statement Example\" title=\"If Statement Example\" src=\"../images/codeImages/ifCode.png\">\n\n  </tr>\n    \n                    <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of loops.php webpage</td>\n    <td><img alt=\"If Statement Output\" title=\"If Statement Output\" src=\"../images/codeImages/ifOut.png\">\n\n  </tr>\n    \n                      <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>\n    <td><img alt=\"Indent Code Example\" title=\"Indent Code Example\" src=\"../images/codeImages/indentCode.png\">\n\n  </tr>\n    \n                          <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>\n    <td><img alt=\"Variable Declaration Example\" title=\"Variable Declaration Example\" src=\"../images/codeImages/declaration.png\">\n\n\n  </tr>\n    \n                  <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>\n    <td><img alt=\"Comment Example\" title=\"Comment Example\" src=\"../images/codeImages/comment.png\">\n\n  </tr>\n    \n         <tr>\n    <td>Self made graphic</td>\n    <td>Copied, cropped & resized  and used in gallery of syntax.php webpage</td>\n    <td><img alt=\"Import Example\" title=\"Import Example\" src=\"../images/codeImages/import.png\">\n\n  </tr>\n   \n    \n    \n\n\n</table>\n',NULL);
/*!40000 ALTER TABLE `modularsite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `python_comments`
--

DROP TABLE IF EXISTS `python_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `python_comments` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `python_comments`
--

LOCK TABLES `python_comments` WRITE;
/*!40000 ALTER TABLE `python_comments` DISABLE KEYS */;
INSERT INTO `python_comments` VALUES (1,'ryan','2019-11-30 21:10:37','yeeet');
/*!40000 ALTER TABLE `python_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quiz` (
  `qnum` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` mediumtext COLLATE utf8_unicode_ci,
  `correct` mediumtext COLLATE utf8_unicode_ci,
  `option2` mediumtext COLLATE utf8_unicode_ci,
  `option3` mediumtext COLLATE utf8_unicode_ci,
  `option4` mediumtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`qnum`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz`
--

LOCK TABLES `quiz` WRITE;
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` VALUES (1,'Which variable is being assigned to a list object?','var=2.0','var=[]','var=\"list\"','var=21'),(2,'Which variable is being assigned to a floating point value?','var=[]','var=\"foobar\"','var=1','var=2.0'),(3,'What type of data do integers hold?','Whole numbers','Characters','Decimal numbers','All of the above'),(4,'What type of data do floats hold?','Decimal numbers','Characters','Whole numbers','All of the above'),(5,'How do you assign a variable in Python?','With \"[name] = [value]\"','With \"var [name] = [value]\"','With \"[value] = [name]\"','With \"[value] = var [name]\"'),(6,'What is th proper way  to add data to an existing list?','list1.append()','list1.add()','list1.attach','list1.plus()'),(7,'How do you determine the length of a string in Python?','len(StringName)','length(StringName)','calcLen(StringName)','StringLength(StringName)'),(8,'Which is best when you have a set amount of times you want a loop to execute? ','For Loop','While Loop','If loop','When loop'),(9,'What often accompanies an if statement?','Else statement','Variable declaration','While loop','For statement'),(10,'How do you write a comment in Python?','#comment','//comment','COMMENT::','/* comment */'),(11,'Why do you indent lines in Python?','To connect lines of code with each other','To make it easier to read','To make it look pretty','No reason at all'),(12,'What is required after writing a loop or if statement?','\":\"','\".\"','\"/\"','Nothing'),(13,'What is the preferred method for printing contents of a loop?','For Loop','While Loop','If Statement','Len() function'),(14,'What statement would be used to add one to the variable \"x\"?','x++','You can\'t add to a variable','x.add()','x plus one'),(15,'How do you turn a variable into a string?','str(var)','float(var)','cast(var)','turnString(var)');
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `results` (
  `userID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `quizDate` datetime DEFAULT NULL,
  `qOrder` tinytext COLLATE utf8_unicode_ci,
  `answerOrder` longtext COLLATE utf8_unicode_ci,
  `chosen` tinytext COLLATE utf8_unicode_ci,
  `score` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surveycomments`
--

DROP TABLE IF EXISTS `surveycomments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `surveycomments` (
  `userID` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `question1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `question2` int(10) NOT NULL,
  `question3` int(10) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surveycomments`
--

LOCK TABLES `surveycomments` WRITE;
/*!40000 ALTER TABLE `surveycomments` DISABLE KEYS */;
/*!40000 ALTER TABLE `surveycomments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-30 16:28:07
