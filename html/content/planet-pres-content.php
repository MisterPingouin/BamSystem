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

if ($planetPresName === $mars[0]) {
    $planetPreseDescription = $mars[1];
    $planetPresInfo = $mars[2];
} elseif ($planetPresName === $moon[0]) {
    $planetPreseDescription = $moon[1];
    $planetPresInfo = $moon[2];
} elseif ($planetPresName === $mercury[0]) {
    $planetPreseDescription = $mercury[1];
    $planetPresInfo = $mercury[2];
} elseif ($planetPresName === $venus[0]) {
    $planetPreseDescription = $venus[1];
    $planetPresInfo = $venus[2];
};



echo ("

<section id='$planetPresId' class='planet-pres'>
    <img class='planet-pres-img' src='$planetPresImg'>
    <div class='planet-pres-txt'>
        <div class='decoLine'>
            <span class='round'></span>
            <span class='line'></span>
            <span class='round'></span>
        </div>
        <h3>$planetPresInfo</h3>
        <div class='planet-pres-title'>
            <h1>$planetPresTitle</h1>
            <span class='rectangle'></span>
        </div>    
        <p>$planetPreseDescription</p>
        <button id='planet-pres-to-travel'><a href='travel.php#$planetPresName-trip'>Go to $planetPresTitle!</a></button>
        
    </div>
</section>

");
