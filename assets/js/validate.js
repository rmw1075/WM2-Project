function validateRegister() {
    var status = false;
    var userID = document.forms["loginForm"]["userID"].value;
    var fName = document.forms["loginForm"]["fname"].value;
    var lName = document.forms["loginForm"]["lname"].value;
    var pass1 = document.forms["loginForm"]["password1"].value;
    var pass2 = document.forms["loginForm"]["password2"].value;
    var email = document.forms["loginForm"]["email"].value;
    if (userID == "") {
      var elements = document.querySelector(".danger");
      elements.classList.remove("danger");
      elements.classList.add("dangerV");
      status = false;
    }

    if (pass1 != pass2) {
        alert("Passwords do not match!");
        status = false;
    }
    return status;
}