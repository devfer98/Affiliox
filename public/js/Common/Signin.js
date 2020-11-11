function passVisibility() {
    var pwState = document.getElementById("pass-field");
    if (pwState.type === "password") {
        pwState.type = "text";
    } else {
        pwState.type = "password";
    }

    var pwState2 = document.getElementById("con-pass-field");
    if (pwState2.type === "password") {
        pwState2.type = "text";
    } else {
        pwState2.type = "password";
    }

    
    var pwState3 = document.getElementById("current-pass-field");
    if (pwState3.type === "password") {
        pwState3.type = "text";
    } else {
        pwState3.type = "password";
    }
  }

// email validation
function validateEmail(email) {
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}

var userEmail = document.getElementById("email");

function validateForm() {
    var isValidEmail = validateEmail(userEmail.value);
    return isValidEmail;
}




