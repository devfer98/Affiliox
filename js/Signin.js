function passVisibility() {
    var pwState = document.getElementById("pass-field");
    if (pwState.type === "password") {
        pwState.type = "text";
    } else {
        pwState.type = "password";
    }
  }