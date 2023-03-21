<?php

$rentalMars = [
    'descriptions' => [
        'Description 1',
        'Description 2',
        'Description 3'
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
    'descriptions' => [
        'Description 1',
        'Description 2',
        'Description 3'
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
    $packDescription1 = $rentalPlanetSelected['descriptions'][0];
    $packDescription2 = $rentalPlanetSelected['descriptions'][1];
    $packDescription3 = $rentalPlanetSelected['descriptions'][2];

    $packPrice1 = $rentalPlanetSelected['prices'][0];
    $packPrice2 = $rentalPlanetSelected['prices'][1];
    $packPrice3 = $rentalPlanetSelected['prices'][2];

    $rentalSlideImg1 = $rentalPlanetSelected['shipImgs'][0];
    $rentalSlideImg2 = $rentalPlanetSelected['shipImgs'][1];
    $rentalSlideImg3 = $rentalPlanetSelected['shipImgs'][2];

    include "html/content/rental-pres-content.php";
}



// $pack1 = ['pack1', 'Pack 1', $packDescription1, $packPrice1];
// $pack2 = ['pack2', 'Pack 2', $packDescription2, $packPrice2];
// $pack3 = ['pack3', 'Pack 3', $packDescription3, $packPrice3];

// $slide = [$packImg1, $packImg2, $packImg3];




echo "<main class='main-rental'>";

makeRentalSection($rentalMars);
makeRentalSection($rentalMercury);
makeRentalSection($rentalMars);
makeRentalSection($rentalMercury);

echo "</main>";

?>