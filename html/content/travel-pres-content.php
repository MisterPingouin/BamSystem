<?php


echo ("
<div id='$travelId-pack-anchor'></div>
<section id='$travelId-pack' class='travel-pack' href='booking.php'>
        <img class ='travel-img' src='$travelImg' alt='Spaceship Image'>
        <div class='decoLine' id='tLine'>
            <span class='round'></span>
            <span class='line' id='ttline'></span>
            <span class='round'></span>
        </div>
        <div class='travel-txt'>
            <div class='travel-titleGroup'>
                <h1 class='travel-title'>MISSION TO $travelTitle</h1>
                <p class='travel-description'>$travelDescription</p>
            </div>
            <div class='travel-info'>
                <h2 class='travel-name'>$travelShip</h2>
                <h3 class='travel-duration'>Duration: $travelDuration</h3>
                
                <a class='bookTrip' href='booking.php';'>Get to $travelTitleUc!</a>
            </div>
        </div>
</section>
");


?>