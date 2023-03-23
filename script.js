//Button

let mybutton = document.getElementById("myBtn");

function scrollFunction() {
  if (
    document.body.scrollTop > 1200 ||
    document.documentElement.scrollTop > 1200
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

window.onscroll = function () {
  scrollFunction();
};

function topFunction() {
  document.documentElement.scrollTop = 0;
}

window.addEventListener("scroll", function () {
  var distanceY = window.pageYOffset || document.documentElement.scrollTop;
  var nav = document.querySelector(".planets-nav2");

  if (distanceY > 30) {
    nav.classList.add("menu2");
  } else {
    nav.classList.remove("menu2");
  }
});

window.addEventListener("scroll", function () {
  var distanceY = window.pageYOffset || document.documentElement.scrollTop;
  var nav = document.querySelector(".planets-nav2");

  if (distanceY > 30) {
    nav.classList.add("is-visible");
  } else {
    nav.classList.remove("is-visible");
  }
});
