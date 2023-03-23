<!DOCTYPE html>
<html lang="en">
<?php

$pageTitle = 'Home';

$link1 = '#planet-mars-anchor';
$link2 = '#planet-moon-anchor';
$link3 = '#planet-mercury-anchor';
$link4 = '#planet-venus-anchor';

$page_title = 'Our Destination';
$subtitle = 'Choose your destination, and discover the planet made for you.';

    require 'html/shared/head.php';
    echo "<body class='darkerBg'>";
    include 'html/shared/nav.html';
    include 'html/shared/planet-nav.php';
    include "html/content/page-title.html";
    include 'html/content/index-content.php';
    include 'html/shared/scripts.html';
    include 'html/shared/footer.html';
    echo "</body>";

?>
</html>