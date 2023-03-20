<!DOCTYPE html>
<html lang="en">

<?php

$pageTitle = 'Booking Validation';

    require 'html/shared/head.php';
    echo "<body>";
    include 'html/shared/nav.html';
    echo "
    <main class='validation-booking'>
    <img src='/assets/background/fondbooking.png' class='background-bookingvalidation'>
    <div class='validation-message'>";
$name = $_POST['nom'];
echo "Merci $name";
    echo "
    </div>
    </main>";
    include 'html/shared/footer.html';
    echo "</body>";
?>
</html>