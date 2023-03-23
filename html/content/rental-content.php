<?php

$rentalMars = [
    'titles' => [
        'Standard Bundle',
        'Standard Plus',
        'Premium Bundle'
    ],
    'descriptions' => [
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.'
    ],
    'prices' => [
        rand(52,500),
        rand(52,500),
        rand(52,500)
    ],
    'shipImgs' => [
        'assets/ships/ship1.jpg',
        'assets/ships/ship2.jpg',
        'assets/ships/ship3.jpg'
    ],
    'customSlider' => ['custom-slider1'],
    'plusBtn' => ['plusSlides1'],
    'planetName' => ['Mars']
];

$rentalMoon = [
    'titles' => [
        'Standard Bundle',
        'Standard Plus',
        'Premium Bundle'
    ],
    'descriptions' => [
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.'
    ],
    'prices' => [
        rand(52,500),
        rand(52,500),
        rand(52,500)
    ],
    'shipImgs' => [
        'assets/ships/ship4.jpeg',
        'assets/ships/ship5.jpg',
        'assets/ships/ship6.jpg'
    ],
    'customSlider' => ['custom-slider2'],
    'plusBtn' => ['plusSlides2'],
    'planetName' => ['Moon']
];

$rentalMercury = [
    'titles' => [
        'Standard Bundle',
        'Standard Plus',
        'Premium Bundle'
    ],
    'descriptions' => [
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.'
    ],
    'prices' => [
        rand(52,500),
        rand(52,500),
        rand(52,500)
    ],
    'shipImgs' => [
        'assets/ships/ship7.jpg',
        'assets/ships/ship8.jpg',
        'assets/ships/ship9.jpg'
    ],
    'customSlider' => ['custom-slider3'],
    'plusBtn' => ['plusSlides3'],
    'planetName' => ['Mercury']
];

$rentalVenus = [
    'titles' => [
        'Standard Bundle',
        'Standard Plus',
        'Premium Bundle'
    ],
    'descriptions' => [
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.',
        'Travel aboard this exceptional spaceship which actually really fast as it is in space and there are no sort of friction to slow it down at all.'
    ],
    'prices' => [
        rand(52,500),
        rand(52,500),
        rand(52,500)
    ],
    'shipImgs' => [
        'assets/ships/ship10.png',
        'assets/ships/ship11.jpg',
        'assets/ships/ship12.jpg'
    ],
    'customSlider' => ['custom-slider4'],
    'plusBtn' => ['plusSlides4'],
    'planetName' => ['Venus']
];

function makeRentalSection($rentalPlanetSelected) {

    $rentalPackTitle1 = $rentalPlanetSelected['titles'][0];
    $rentalPackTitle2 = $rentalPlanetSelected['titles'][1];
    $rentalPackTitle3 = $rentalPlanetSelected['titles'][2];

    $rentalPackDescription1 = $rentalPlanetSelected['descriptions'][0];
    $rentalPackDescription2 = $rentalPlanetSelected['descriptions'][1];
    $rentalPackDescription3 = $rentalPlanetSelected['descriptions'][2];

    $rentalPackPrice1 = $rentalPlanetSelected['prices'][0];
    $rentalPackPrice2 = $rentalPlanetSelected['prices'][1];
    $rentalPackPrice3 = $rentalPlanetSelected['prices'][2];

    $rentalSlideImg1 = $rentalPlanetSelected['shipImgs'][0];
    $rentalSlideImg2 = $rentalPlanetSelected['shipImgs'][1];
    $rentalSlideImg3 = $rentalPlanetSelected['shipImgs'][2];

    $customSlider = $rentalPlanetSelected['customSlider'][0];

    $plusBtn = $rentalPlanetSelected['plusBtn'][0];

    $planetName = $rentalPlanetSelected['planetName'][0];

    echo "<div id='$planetName-rental-anchor'></div>";
    include 'html/content/rental-slide.php';
    echo "<div class='pack-choice'>";
    include 'html/content/rental-pack.php';
    echo "</div></div>";
}

echo "<main class='main-rental'>";

include "html/content/page-title.html";
makeRentalSection($rentalMars);
makeRentalSection($rentalMoon);
makeRentalSection($rentalMercury);
makeRentalSection($rentalVenus);

echo "</main>";

?>