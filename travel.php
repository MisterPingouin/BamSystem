<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Travel';

$link1 = "#mars-trip";
$link2 = "#moon-trip";
$link3 = "#mercury-trip";
$link4 = "#venus-trip";

    require 'html/shared/head.php';
    echo "<body>";
    include 'html/shared/nav.html';
    include 'html/shared/planet-nav.php';
    include 'html/shared/planet-nav2.html';
    include 'html/content/travel-content.html';
    include 'html/shared/footer.html';
    include 'html/shared/scripts.html';
    echo "</body>";
?>
</html>