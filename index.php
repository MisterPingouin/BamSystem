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
    echo "<main>";
    include 'html/shared/planet-nav.php';
    include 'html/content/index-content.php';
    echo "</main>";
    include 'html/shared/footer.html';
    include 'html/shared/scripts.html';
    echo "</body>";

?>
</html>