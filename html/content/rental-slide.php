<?php


echo ("
<div class='imagebackheadrental'>
    <div>
    <div class='slide-container'>
        <div class='custom-slider fade'>
          <div class='slide-index'>Pack 1</div>
          <img class='slide-img' src='$rentalSlideImg1'/>
          <div class='slide-text'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </div>
        </div>
    <div class='custom-slider fade'>
        <div class='slide-index'>Pack 2</div>
        <img class='slide-img' src='$rentalSlideImg2' />
        <div class='slide-text'>Nullam luctus aliquam ornare.</div>
    </div>
    <div class='custom-slider fade'>
        <div class='slide-index'>Pack 3</div>
        <img class='slide-img' src='$rentalSlideImg3' />
        <div class='slide-text'>
          Praesent lobortis libero sed egestas suscipit.
        </div>
    </div>
    <a class='prev' onclick='plusSlides(-1)'>❮</a>
    <a class='next' onclick='plusSlides(1)'>❯</a>
</div>

")

?>