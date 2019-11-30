<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>LearnPy Survey</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<script src="../js/validate.js"></script>
</head>

<body>
<div class="content">
		<?php
		session_start();
		$path = './';
		$page = 'Help';
		include $path . '../inc/header4.php';
		?>
		<div id="content" style="padding-top:1em;margin-top:5em;">
		<h2>Please tell us about your Experience:</h2>

	<form action = "../php/process.php" method = "POST" 
		onsubmit="return validateForm();">
        
      
        
<!--		All the radio buttons for the user to pick their favorite site visited-->
        <fieldset style="background-color:#fffbf7 ">
            <legend>Favorite Topic - Must Select one</legend>
			<input type="radio" name="favTopic" value="lists" id="lists" onclick="off();"><label for="lists">Lists</label><br>
        	<input type="radio" name="favTopic" value="strings" id="strings" onclick="off();" ><label for = "strings">Strings</label><br>
            
            <input type="radio" name="favTopic" value="floats" id="floats" onclick="off();" ><label for = "floats">Floats</label><br>
        	<input type="radio" name="favTopic" value="loops"  id="loops" onclick="off();"><label for ="Loops">Loops</label><br>
        	<input type="radio" onclick="off();" name="favTopic" value="ifstatements" id="art"><label for ="ifstatements">If Statements</label><br>
    		<input name="other" placeholder="Other Topic" type="text" id="other" size="60">
        </fieldset>
        
        
        <h3>How well did the content prepare you for the quiz?</h3>
        1<input name="quizrate" type="range" min="1" max="10" value="5" list="set">10<br/>
		<datalist id = "set">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		</datalist>
        
        <h3>Rate your overall experience on LearnPy</h3>
        1<input name="rate" type="range" min="1" max="10" value="5" list="set">10<br/>
		<datalist id = "set">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		</datalist>

        <p><input id="center" type="submit" class="button" value="Submit Info"/></p>
        
    </form>
	</div>
	</div>
<?php
         $path = './';
         $page = 'Home';
         include $path . '../inc/footer.php';
		 echo "<script>document.getElementById(\"quiz\").style.color = \"survey\";</script>";
    ?>

