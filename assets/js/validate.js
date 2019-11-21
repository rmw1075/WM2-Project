function validateRegister() {
    const alerts = document.getElementById("alerts");
    var userID = document.forms["loginForm"]["userID"].value;
    var fName = document.forms["loginForm"]["fname"].value;
    var lName = document.forms["loginForm"]["lname"].value;
    var pass1 = document.forms["loginForm"]["password1"].value;
    var pass2 = document.forms["loginForm"]["password2"].value;
    var email = document.forms["loginForm"]["email"].value;
    var blank = false;
    var mismatch = false;
    var status = false;
    while (alerts.firstChild) {
      alerts.removeChild(alerts.firstChild);
    }
    if (userID == "") {
      document.querySelector("#userID").style.border= "1px solid red";
      blank = true;
    }
    if (fName == ""){
      document.querySelector("#fName").style.border= "1px solid red";
      blank = true;
    }
    if (lName == "") {
      document.querySelector("#lName").style.border= "1px solid red";
      blank = true;
    }
    if (pass1 == "" || pass2 == "") {
      document.querySelectorAll("#password").style.border= "1px solid red";
      blank = true;
    }
    if (email == "") {
      document.querySelector("#email").style.border= "1px solid red";
      blank = true;
    } 
    // if (pass1 != pass2) {
    //   document.querySelector(".danger p").innerHTML = "Passwords must match";
    //   document.querySelector(".danger").style.visibility = "visible";
    // }

    if (blank) {
      var div = document.createElement("div");
      div.className = "danger";
      var p = document.createElement("p");
      p.innerText = "Please fill in all fields";
      div.appendChild(p);
      alerts.appendChild(div);
    }
    return status;
}