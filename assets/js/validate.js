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

function validateRegister() {
  const alerts = document.getElementById("alerts");
  var userID = document.forms["loginForm"]["userID"].value;
  var fName = document.forms["loginForm"]["fname"].value;
  var lName = document.forms["loginForm"]["lname"].value;
  var pass1 = document.forms["loginForm"]["password1"].value;
  var pass2 = document.forms["loginForm"]["password2"].value;
  var email = document.forms["loginForm"]["email"].value;
  var role = document.forms["loginForm"]["role"].value;
  var blank = false;
  var mismatch = false;
  var status = true;

  while (alerts.firstChild) {
    alerts.removeChild(alerts.firstChild);
  }

  if (userID == "") {
    document.querySelector("#userID").style.border = "1px solid red";
    blank = true;
  } else {
    document.querySelector("#userID").style.border = "none";
  }

  if (fName == "") {
    document.querySelector("#fName").style.border = "1px solid red";
    blank = true;
  } else {
    document.querySelector("#fName").style.border = "none";
  }

  if (lName == "") {
    document.querySelector("#lName").style.border = "1px solid red";
    blank = true;
  } else {
    document.querySelector("#lName").style.border = "none";
  }

  if (email == "") {
    document.querySelector("#email").style.border = "1px solid red";
    blank = true;
  } else {
    document.querySelector("#email").style.border = "none";
  }

  if (pass1 != pass2) {
    fields = document.getElementsByClassName("password");
    fields[0].style.border = "1px solid red";
    fields[1].style.border = "1px solid red";
    mismatch = true;
  } else {
    fields = document.getElementsByClassName("password");
    fields[0].style.border = "none";
    fields[1].style.border = "none";
  }

  if (pass1 == "" || pass2 == "") {
    fields = document.getElementsByClassName("password");
    fields[0].style.border = "1px solid red";
    fields[1].style.border = "1px solid red";
    blank = true;
  } else {
    fields = document.getElementsByClassName("password");
    fields[0].style.border = "none";
    fields[1].style.border = "none";
  }

  if (role == "") {
    document.getElementById("role").style.border = "1px solid red";
    blank = true;
  } else {
    document.getElementById("role").style.border = "none";
  }



  if (blank) {
    var div = document.createElement("div");
    div.className = "danger";
    var p = document.createElement("p");
    p.innerText = "Please fill in all fields";
    div.appendChild(p);
    alerts.appendChild(div);
  }

  if (mismatch) {
    var div = document.createElement("div");
    div.className = "danger";
    var p = document.createElement("p");
    p.innerText = "Passwords must match";
    div.appendChild(p);
    alerts.appendChild(div);
  }

  if (mismatch || blank){
    status = false
  }
  return status;
}