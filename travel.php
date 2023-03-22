<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Travel';

$link1 = "#mars-scroll";
$link2 = "#moon-scroll";
$link3 = "#mercury-scroll";
$link4 = "#venus-scroll";

    require 'html/shared/head.php';
    echo "<body class='darkerBg'>";
    include 'html/shared/nav.html';
    include 'html/shared/planet-nav.php';
    include 'html/content/travel-content.php';
    include 'html/shared/footer-travel.html';
    include 'html/shared/scripts.html';
    echo "</body>";
?>
</html>