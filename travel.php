<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Travel';

$link1 = "#mars-pack-anchor";
$link2 = "#moon-pack-anchor";
$link3 = "#mercury-pack-anchor";
$link4 = "#venus-pack-anchor";

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