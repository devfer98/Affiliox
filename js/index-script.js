function myFunction1() {
  var dots = document.getElementById("dots-1");
  var moreText = document.getElementById("more-1");
  var btnText = document.getElementById("myBtn-1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Load more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Load less";
    moreText.style.display = "inline";
  }
}

function myFunction2() {
  var dots = document.getElementById("dots-2");
  var moreText = document.getElementById("more-2");
  var btnText = document.getElementById("myBtn-2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Load more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Load less";
    moreText.style.display = "inline";
  }
}