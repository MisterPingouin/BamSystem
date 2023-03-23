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
echo "<div class='titlevalidation'> <h2>Thank you $name !</h2></div>" . "<div class=contentvalidation-message><p>Your booking to $sujet has been well sent, you will receive your confirmation ASAP on your mail</p></div> ";
    echo "
    <p>Don't hesitate to get your own spaceship during your trip with our rental service :</p>  
    <div class='validationgorental'><a href='rental.php'><p>Go to our rental page</p></a>  
</div> 
</div>  
    </main>";
    include 'html/shared/footer.html';
    echo "</body>";
?>
</html>