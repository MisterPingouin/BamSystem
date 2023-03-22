// JS Page Rental //

var slideIndex = 1;
showSlides(slideIndex,'custom-slider1');
showSlides(slideIndex,'custom-slider2');
showSlides(slideIndex,'custom-slider3');
showSlides(slideIndex,'custom-slider4');

function plusSlides1(n) {
  showSlides((slideIndex += n),'custom-slider1');
}
function plusSlides2(n) {
  showSlides((slideIndex += n),'custom-slider2');
}
function plusSlides3(n) {
  showSlides((slideIndex += n),'custom-slider3');
}
function plusSlides4(n) {
  showSlides((slideIndex += n),'custom-slider4');
}


function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n,className) {
  var i;
  var slides = document.getElementsByClassName(className);

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

// Pop-up
function openForm() {
  document.getElementById("popupForm").style.display = "block";
}

function closeForm() {
  document.getElementById("popupForm").style.display = "none";
}
