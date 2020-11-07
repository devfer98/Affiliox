
const signUp = document.getElementById('signUp');
const emailInput = document.getElementById('email');
const SubButton = document.getElementById('submit');
  
emailInput.addEventListener('keyup', function (event) {
  isValidEmail = emailInput.checkValidity();
  
  if ( isValidEmail ) {
    SubButton.disabled = false;
  } else {
    SubButton.disabled = true;
  }
});
  
SubButton.addEventListener('click', function (event) {
  signUp.submit();
});