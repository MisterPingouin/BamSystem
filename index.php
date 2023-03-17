<!DOCTYPE html>
<html lang="en">
<?php

$pageTitle = 'Home';

$link1 = '#planet-mars';
$link2 = '#planet-moon';
$link3 = '#planet-mercury';
$link4 = '#planet-venus';

    require 'html/shared/head.php';
    echo "<body>";
    include 'html/shared/nav.html';
    include 'html/shared/planet-nav.php';
    include 'html/shared/planet-nav2.html';
    include 'html/content/index-content.php';
    include 'html/shared/scripts.html';
    include 'html/shared/footer.html';
    echo "</body>";

?>
</html>