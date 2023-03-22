<?php

    $mars = [
        'mars',
        'Mars is the fourth planet of our solar system. Its impact craters, valleys and dunes have been populated with a culturally rich cosmopolitain people. There are monuments, shops and restaurants worth trying and visiting all over the planet.',
        '| POPULATION: 5,161,385 | CIRCUMFERENCE: 21,344 KM | DISTANCE FROM EARTH: 54.6M KM |'
    ];

    $moon = [
        'moon',
        'The Moon is Earth\'s only natural satellite. In the recent years, the Moon has become more and more populated. As it was a travel checkpoint and general crossing over almost all flights, people were drawn in by the business.',
        '| POPULATION: 4,395 | CIRCUMFERENCE: 362,600 KM | DISTANCE FROM EARTH: 384,400 KM |'
    ];

    $mercury = [
        'mercury',
        'Mercury is the smallest planet in the Solar System and the closest to the sun. Its hot temperatures and beaches will make it the perfect holiday destination for you and your family.',
        '| POPULATION: 18,185,668 | CIRCUMFERENCE: 69,816,900 KM | DISTANCE FROM EARTH: 201.4M KM |'
    ];

    $venus = [
        'venus',
        'Venus is the second planet from the Sun. It is sometimes called Earth "sister". Its called temperature has grown the skiing and snowboarding business. You would love getting warm inside you Venus Chalet.',
        '| POPULATION: 56,653,854 | CIRCUMFERENCE: 108,939,000 KM | DISTANCE FROM EARTH: 61M KM |'
    ];

    function planetPres(array $planetSelected) {

        $planetPresName = $planetSelected[0];
        $planetPresDescription = $planetSelected[1];
        $planetPresInfo = $planetSelected[2];
        $planetPresTitle = strtoupper($planetPresName);
        $planetPresId = "planet-$planetPresName";
        include 'html/content/planet-pres-content.php';
    };

    echo "<main class='main-index'>";
    
    planetPres($mars);
    planetPres($moon);
    planetPres($mercury);
    planetPres($venus);

    echo "</main>";

echo "<button onclick='topFunction()' id='myBtn' title='Go to top'><img src='/assets/logo/transparent-logo-rocket-circle-symbol-emblem-4d-v16-r4-is-here-4d-blog5dbe8038c7f6d2.9656801015727657528191.png' class='toop' alt='top'></button>"

?>
