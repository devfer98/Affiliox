// ----------------side navigarion------------------------
function openNav() {

    document.getElementById("mySidenav").style.width = "250px";
    // document.getElementById("main").style.marginLeft = "250px";
  }  

  
  function closeNav() {

  
    document.getElementById("mySidenav").style.width = "0";
    // document.getElementById("main").style.marginLeft = "0";
  }
  document.getElementById("select-nav").onclick = function() {reset()};
  function reset(){
    document.getElementById("select-nav").selectedIndex = 2; //1 = option 2
    }
  
  