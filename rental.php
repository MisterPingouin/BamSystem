<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Rental';
$page_title = 'Our Shuttles';
$subtitle = ' Choose the best transportation that fits your needs.';
$link1 = '#rentalmars';
$link2 = '#rentalmoon';
$link3 = '#rentalmercury';
$link4 = '#rentalvenus';

    require 'html/shared/head.php';
    echo "<body>";
    include 'html/shared/nav.html';
    include 'html/shared/planet-nav.php';
    include 'html/content/rental-content.php';
    include 'html/shared/footer.html';
    include 'html/shared/scripts.html';
    include 'html/shared/scriptslides.html';
    echo "</body>";

?>
</html>