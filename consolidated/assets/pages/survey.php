<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>LearnPy Survey</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<script>
		//Function for date and time to display system time on console
		function checkDate(){
			"use strict";
			var validDate=true;
			var vdate = document.getElementById('visitDate').value;
			var today = new Date();
			console.log("Users date = "+ vdate);
			var dd = today.getDate();
			var mm = today.getMonth()+1;
			var yyyy = today.getFullYear();
			
			if (dd < 10){
				dd = '0' + dd;
			}
			if (mm < 10){
				mm = '0' + mm;
			}
			var td = "" + yyyy + "-" + mm + "-" + dd;
			console.log("System date =" + td);
			
			if(vdate >= td){
				document.getElementById('visitDate').style.borderColor="red";
				document.getElementById("errorMessage").style.backgroundColor='pink';
				document.getElementById('errorMessage'.innerHTML="   *** Warning: You can't pick today or days after");
			}//end of if statement
			else {
				document.getElementById('errorMessage').innerHTML="";
				document.getElementById("visitDate").style.border=null;
				document.getElementById("errorMessage").style = null;
				validDate = true;
			}//end of else statement
			console.log("Check date: dateValid is "+validDate);
			return(validDate);
		}//end of function to check visit date and present date
		
		//Code to check if radios buttons were selected or not so page could be validated
		function checkButtons(){
			"use strict";
			var isChecked = false;
			var len = document.getElementsByName('favTopic').length;
			var choices = new Array();
			for (var i=0; i<len; i++){
				if (document.getElementsByName('favTopic')[i].checked){
					choices.push(document.getElementsByName('favTopic')[i].value);
				}
			}//end of for loop
			if (choices.length > 0){
				isChecked = true;
				document.getElementsByTagName('fieldset')[0].style = null;
				document.getElementsByTagName('legend')[0].style= null;
			}
			else{
				document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
				document.getElementsByTagName('legend')[0].style.color = 'red';
			}
			console.log("In function to check radio buttons  - isChecked value -> " + isChecked);
			return isChecked;
		}//end of function checkIfRadioButtonSelected
		
		
		//function to validate form when submit is clicked
		function validateForm(){
			"use strict";
			var validatePage = true;
			radioButtonChecked = false;
//			If statement to mark name box red if it is empty
			if(document.getElementById("name").value == ''){
				document.getElementById("name").style.borderColor="red";
				document.getElementById("name").style.backgroundColor="pink";
				validatePage = false;
			}
			else{
				document.getElementById("name").style = null;
			}
			
			if(document.getElementById("visitdate").value == ''){
				document.getElementById("visitdate").style.borderColor="red";
				document.getElementById("visitdate").style.backgroundColor = 'pink';
				isvalid=false;
			}
			else{
     		//   document.getElementById("visitdate").style.border= "none";
	 		//	document.getElementById("visitdate").style.backgroundColor = 'white';
				document.getElementById("visitDate").style = null;
       		}
			var radioButtonChecked = checkButtons();
			var rightDate = checkDate();
			console.log("name: "+validatePage);
			console.log("Did the radio button get picked? "+radioButtonChecked);
			console.log("Was the date before today? "+rightDate);
			return (validatePage && radioButtonChecked && rightDate);
		}//function to validate form when submit is clicked
	</script>
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
    ?>

</body>
<script>
document.getElementById("forms").style.color = "orange";
document.getElementById("survey").style.color = "orange";
</script>
</html>