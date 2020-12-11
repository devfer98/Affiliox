// ----------------side navigarion------------------------
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    // document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    // document.getElementById("main").style.marginLeft = "0";
  }
  


var Index = 1;
show(Index);

function increment(n) {
  show(Index +=n);
}

function show(n) {
  var i;
  var x = document.getElementsByClassName("images");
  if (n > x.length) {Index = 1}
  if (n < 1) {Index = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[Index-1].style.display = "block";  
}

