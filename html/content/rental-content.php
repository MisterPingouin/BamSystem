<?php

$rentalMars = [
    'titles' => [
        'title 1',
        'title 2',
        'title 3'
    ],
    'descriptions' => [
        'Description 1 Mars',
        'Description 2 Mars',
        'Description 3 Mars'
    ],
    'prices' => [
        '468',
        '562',
        '789'
    ],
    'shipImgs' => [
        'assets/ships/ship1.jpg',
        'assets/ships/Ship2.jpg',
        'assets/ships/Ship3.jpg'
    ]
];

$rentalMoon = [
    'titles' => [
        'title 1',
        'title 2',
        'title 3'
    ],
    'descriptions' => [
        'Description 1 Moon',
        'Description 2 Moon',
        'Description 3 Moon'
    ],
    'prices' => [
        '468',
        '562',
        '789'
    ],
    'shipImgs' => [
        'assets/ships/ship1.jpg',
        'assets/ships/Ship2.jpg',
        'assets/ships/Ship3.jpg'
    ]
];

$rentalMercury = [
    'titles' => [
        'title 1',
        'title 2',
        'title 3'
    ],
    'descriptions' => [
        'Description 1 Mercury',
        'Description 2 Mercury',
        'Description 3 Mercury'
    ],
    'prices' => [
        '468',
        '562',
        '789'
    ],
    'shipImgs' => [
        'assets/ships/ship1.jpg',
        'assets/ships/Ship2.jpg',
        'assets/ships/Ship3.jpg'
    ]
];

$rentalVenus = [
    'titles' => [
        'title 1',
        'title 2',
        'title 3'
    ],
    'descriptions' => [
        'Description 1 Venus',
        'Description 2 Venus',
        'Description 3 Venus'
    ],
    'prices' => [
        '468',
        '562',
        '789'
    ],
    'shipImgs' => [
        'assets/ships/ship1.jpg',
        'assets/ships/Ship2.jpg',
        'assets/ships/Ship3.jpg'
    ]
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

    include 'html/content/rental-slide.php';
    echo "<div class='pack-choice'>";
    include 'html/content/rental-pack.php';
    echo "</div>";
}

echo "<main class='main-rental'>";

makeRentalSection($rentalMars);
makeRentalSection($rentalMoon);
makeRentalSection($rentalMercury);
makeRentalSection($rentalVenus);

echo "</main>";

?>