<?php

    $mars = [
        'mars',
        'Lorem Mars',
        '| POPULATION: 5,161,385 | CIRCUMFERENCE: 21,344 KM | DISTANCE FROM EARTH: 54.6M KM |'
    ];

    $moon = [
        'moon',
        'Lorem Moon',
        '| POPULATION: 5,161,385 | CIRCUMFERENCE: 21,344 KM | DISTANCE FROM EARTH: 54.6M KM |'
    ];

    $mercury = [
        'mercury',
        'Lorem Mercury',
        '| POPULATION: 5,161,385 | CIRCUMFERENCE: 21,344 KM | DISTANCE FROM EARTH: 54.6M KM |'
    ];

    $venus = [
        'venus',
        'Lorem Venus',
        '| POPULATION: 5,161,385 | CIRCUMFERENCE: 21,344 KM | DISTANCE FROM EARTH: 54.6M KM |'
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

    echo "</main>"

?>
