/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function openNav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
    document.getElementById("topbar-logo").style.float="none";
  } else {
    x.className = "topnav";
    document.getElementById("topbar-logo").style.float="left";
  }
}
function openNavGlobal(){
  var y = document.getElementById("myTopnav-global");
  if (y.className === "topnav-global") {
    y.className += " responsive";
    document.getElementById("topbar-logo").style.float="none";
  } else {
    y.className = "topnav-global";
    document.getElementById("topbar-logo").style.float="left";
  }
}

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("myTopnav").style.backgroundColor = '#7FA8AE';
    document.getElementById("myTopnav").style.borderBottom = '#000 solid';
  } else {
    document.getElementById("myTopnav").style.backgroundColor = '';
    document.getElementById("myTopnav").style.borderBottom = '';
  }
}