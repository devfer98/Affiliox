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

var slideIndex = 1;
showSlides(slideIndex);

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
