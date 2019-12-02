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

  if (mismatch || blank) {
    status = false
  }

  return status;
};

function validateForm() {
  const alerts = document.getElementById("alerts");
  var name = document.forms["blogForm"]["name"].value;
  var comment = document.forms["blogForm"]["comment"].value;
  var blank = false;
  var status = true;

  while (alerts.firstChild) {
    alerts.removeChild(alerts.firstChild);
  }

  if (name == "") {
    document.getElementById("name").style.border = "1px solid red";
    blank = true;
  } else {
    document.getElementById("name").style.border = "none";
  }

  if (comment == "") {
    document.getElementById("comment").style.border = "1px solid red";
    blank = true;
  } else {
    document.getElementById("comment").style.border = "none";
  }

  if (blank) {
    var div = document.createElement("div");
    div.className = "danger";
    var p = document.createElement("p");
    p.innerText = "Please fill in all fields";
    div.appendChild(p);
    alerts.appendChild(div);
    status = false;
  }

  return status;
};

function validateQuiz() {
  const alerts = document.getElementById("alerts");
  var status = true;
  var blank = false;

  while (alerts.firstChild) {
    alerts.removeChild(alerts.firstChild);
  }

  var count = 0;
  while (count < 15) {
    var question = "option" + count;
    var field = "fset" + count;
    var q = document.forms["quizForm"][question].value;

    if (q == "") {
      document.getElementById(field).style.border = "1px solid red";
      blank = true;
    } else {
      document.getElementById(field).style.border = "none";
    }

    count = count + 1;
  }

  if (blank) {
    var div = document.createElement("div");
    div.className = "danger";
    var p = document.createElement("p");
    p.innerText = "Please fill in all fields";
    div.appendChild(p);
    alerts.appendChild(div);
    status = false;
  }

  return status;
};

function validateSurvey() {
  const alerts = document.getElementById("alerts");
  var status = true;
  var blank = false;

  while (alerts.firstChild) {
    alerts.removeChild(alerts.firstChild);
  }

  var favTopic = document.forms["surveyForm"]["favTopic"].value;

  if (favTopic == "") {
    document.getElementById("favTopic").style.border = "1px solid red";
    blank = true;
  } else {
    document.getElementById("favTopic").style.border = "none";
  }

  if (blank) {
    var div = document.createElement("div");
    div.className = "danger";
    var p = document.createElement("p");
    p.innerText = "Please fill in all fields";
    div.appendChild(p);
    alerts.appendChild(div);
    status = false;
  }

  return status;
}