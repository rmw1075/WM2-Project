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