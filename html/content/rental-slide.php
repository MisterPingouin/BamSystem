<?php


echo ("
<div class='imagebackheadrental'>
  
  <div class='slide-container'>
    <div class='$customSlider fade'>
      <div class='slide-index'>$planetName</div>
      <img class='slide-img' src='$rentalSlideImg1' alt='Spaceship on a background full of stars'/>
      <div class='slide-text'></div>
  </div>
  <div class='$customSlider fade'>
      <div class='slide-index'>$planetName</div>
      <img class='slide-img' src='$rentalSlideImg2' alt='Spaceship on a background full of stars'/>
      <div class='slide-text'></div>
  </div>
  <div class='$customSlider fade'>
      <div class='slide-index'>$planetName</div>
      <img class='slide-img' src='$rentalSlideImg3' alt='Spaceship on a background full of stars'/>
      <div class='slide-text'></div>
  </div>
  <a class='prev' onclick='$plusBtn(-1)'>❮</a>
  <a class='next' onclick='$plusBtn(1)'>❯</a>
</div>

")

?>