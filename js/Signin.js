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
  }



