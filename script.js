//Button

let mybutton = document.getElementById("myBtn");

function scrollFunction() {
  if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

window.onscroll = function() {scrollFunction()};

function topFunction() {
  document.documentElement.scrollTop = 0;
}