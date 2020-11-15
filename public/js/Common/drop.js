var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

function openNav2() {
  document.getElementById("mySidenav2").style.width = "250px";
  // document.getElementById("main").style.marginLeft = "250px";
}

function closeNav2() {
  document.getElementById("mySidenav2").style.width = "0";
  // document.getElementById("main").style.marginLeft = "0";
}


