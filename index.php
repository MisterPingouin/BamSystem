<!DOCTYPE html>
<html lang="en">
<?php

$pageTitle = 'Home';

$link1 = '#planet-mars-scroll';
$link2 = '#planet-moon-scroll';
$link3 = '#planet-mercury-scroll';
$link4 = '#planet-venus-scroll';

    require 'html/shared/head.php';
    echo "<body class='darkerBg'>";
    include 'html/shared/nav.html';
    include 'html/shared/planet-nav.php';
    include 'html/content/index-content.php';
    include 'html/shared/scripts.html';
    include 'html/shared/footer.html';
    echo "</body>";

?>
</html>