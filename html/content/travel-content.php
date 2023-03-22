<?php

$marsTravel = [
    'assets/ships/890_Jump_Leaving_Hurston_3.6.png',
    'mars',
    'The 890-Jump',
    '3 months',
    'Come aboard this piece of beauty. It is steady, fast and fully automatic. You won\'t feel a thing and mars because one step closer to your dreams.'
];

$moonTravel = [
    '/assets/ships/Nasa Autonomous Article Image.jpg',
    'moon',
    'Nasa\'s Autonomous',
    '5 days',
    'The notorious Autonomous machine comes from the minds of Nasa. This spacecraft will launch your ass from 0 to the moon before you have time ot sneeze on the Moon.'
];

$mercuryTravel = [
    '/assets/ships/Mass-Effect-Normandy1.jpg',
    'mercury',
    'The Normandy',
    '2.3 years',
    'The ME normandy was a military space-shuttle before it was rehabilitated into a leasure transport. In the comfort of its cabins, you can simply enjoy your time aboard this beauty on your way to Mercury.'
];

$venusTravel = [
    '/assets/ships/Royalcruiser.png',
    'venus',
    'The Royal Cruiser',
    '3.7 years',
    'To get to Venus, you need to get yourself inside the peak of leisure transport technology. The Royal Cruiser just doesn\'t know how to disappoint.'
];

function travelPres(array $planetSelected) {
    $travelId = $planetSelected[1];
    $travelImg = $planetSelected[0];
    $travelTitle = strtoupper($planetSelected[1]);
    $travelShip = $planetSelected[2];
    $travelDuration = $planetSelected[3];
    $travelDescription = $planetSelected[4];
    $travelTitleUc = ucfirst($planetSelected[1]);
    
    include 'html/content/travel-pres-content.php';
};

echo "<div class='pageNameD'><h1 class='pageName'>Our cruises</h1></div>";

echo "<main class='main-travel'>";

travelPres($marsTravel);
travelPres($moonTravel);
travelPres($mercuryTravel);
travelPres($venusTravel);

echo "</main>";

echo "<button onclick='topFunction()' id='myBtn' title='Go to top'><img src='/assets/logo/transparent-logo-rocket-circle-symbol-emblem-4d-v16-r4-is-here-4d-blog5dbe8038c7f6d2.9656801015727657528191.png' class='toop' alt='top'></button>"

?>