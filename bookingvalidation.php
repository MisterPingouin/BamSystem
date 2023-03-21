<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Booking Validation';

    require 'html/shared/head.php';
    echo "<body>";
    include 'html/shared/nav.html';
    echo "
    <main class='validation-booking'>
    <img src='/assets/background/fondbooking.png' class='background-bookingvalidation' alt='backgroundspace'>
    <div class='validation-message'>";
$name = $_POST['nom'];
$sujet = $_POST['sujet'];
echo "Thank you $name !" . "<br>" .  " Your booking to $sujet has been well sent, you will receive your confirmation ASAP on your mail ";
    echo "
    </div>
    </main>";
    include 'html/shared/footer.html';
    echo "</body>";
?>
</html>