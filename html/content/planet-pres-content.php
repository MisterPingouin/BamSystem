<?php

echo ("
<section id='$planetPresId' class='planet-pres'>
    <div id='$planetPresId-anchor'></div>
    <div class='decoLine'>
        <span class='round'></span>
        <span class='line'></span>
        <span class='round'></span>
    </div>
    <div class='planet-pres-txt'>
        <h3>$planetPresInfo</h3>
        <div class='planet-pres-title'>
            <h1>$planetPresTitle</h1>
            <span class='rectangle'></span>
        </div>    
        <p>$planetPresDescription</p>
        <a href='travel.php#$planetPresName-pack' class='planet-pres-to-travel'>Go to $planetPresTitle!</a>
    </div>
        <img class='planet-pres-img' src='/assets/planets/sd/$planetPresName-sd.png' alt='planet $planetPresName' loading='lazy'>    
</section>
");
