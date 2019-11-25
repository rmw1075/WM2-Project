<?php
$path = './';
$page = 'Survey';
include $path . '../inc/header.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>LearnPy Survey</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<script src="../js/validate.js"></script>
</head>

<body id="body">
	<br />
	<h1>Survey</h1>
	<form action = "../php/process.php" method = "POST" 
		onsubmit="return validateForm();">
        
        <div id="surveyquestion">
			Please tell us about your Experience:
		</div>
        
        
<!--		All the radio buttons for the user to pick their favorite site visited-->
        <fieldset>
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
	<script>
		var other = document.getElementById('other_places');
		other.style.visibility = 'hidden';
		function otherplace(){
			var other2 = document.getElementById('other');
			console.log(other2.attributes);
			if (other.checked == true) {
				console.log("make the box visual")
				other.style.visibility = 'visible';
			} 
			else{
				other.style.visibility = 'hidden';
			}
		}
		function getOther(){
			alert('help');
			$_POST[other_places] = document.getElementById('other_places').value;
			var other_place = doucment.getElementById('other_places').value;
			console.log(other_place)
		}
		
		function off(){
			var other = document.getElementById('other_places')
			other.style.visibility = 'hidden';
			other.value="";
		}
	</script>
</body>
</html>