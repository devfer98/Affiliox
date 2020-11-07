


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

var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}