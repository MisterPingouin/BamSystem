<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Travel';

$link1 = "#mars-pack-anchor";
$link2 = "#moon-pack-anchor";
$link3 = "#mercury-pack-anchor";
$link4 = "#venus-pack-anchor";

$page_title = 'Our Cruise';
$subtitle = ' Pick the cruise that is made for you. ';

    require 'html/shared/head.php';
    echo "<body class='darkerBg'>";
    include 'html/shared/nav.html';
    include 'html/shared/planet-nav.php';
    include "html/content/page-title.html";
    include 'html/content/travel-content.php';
    include 'html/shared/footer-travel.html';
    include 'html/shared/scripts.html';
    echo "</body>";
?>
</html>