function validatePasswords(){
    var status = true;

    var pass1 = document.forms[ "loginForm" ]["password1"].value;
    var pass2 = document.forms[ "loginForm" ]["password2"].value;
    if (pass1 != pass2) {
        alert("Passwords do not match!");
        status = false;
    }
    return status;
}