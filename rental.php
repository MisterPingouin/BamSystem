<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Rental';
$page_title = 'Our Shuttles';
$subtitle = ' Choose the best transportation that fits your needs.';
$link1 = '#Mars-rental-anchor';
$link2 = '#Moon-rental-anchor';
$link3 = '#Mercury-rental-anchor';
$link4 = '#Venus-rental-anchor';
$page_title_class = '';

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