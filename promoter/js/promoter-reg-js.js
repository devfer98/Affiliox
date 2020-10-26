function passVisibility() {
  var x = document.getElementById("typePassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var x = document.getElementById("conPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// validate email
// function validateEmail(email) {
//  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
//   {
//     return (true)
//   }
//     alert("You have entered an invalid email address!")
//     return (false)
// }

// var userEmail = document.getElementById("email");

// function validateForm() {
// 	var isValidEmail = validateEmail(userEmail.value);
// 	return isValidEmail;
// }