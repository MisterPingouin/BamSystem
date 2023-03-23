<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Booking';
$page_title = 'Book your trip';
$subtitle = 'And let\'s travel beyond the stars';
$page_title_class = '-booking';

    require 'html/shared/head.php';
    echo "<body>";
    include 'html/shared/nav.html';
    echo "<div class='booking-spacer'></div>";
    include 'html/content/page-title.html';
    include 'html/content/booking-content.html';
    include 'html/shared/footer.html';
    echo "</body>";
?>
</html>