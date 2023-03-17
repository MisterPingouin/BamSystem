<?php

    function planetPres($planetPresName) {
        $planetPresId = "planet-$planetPresName";

        include 'html/content/planet-pres-content.php';
    };

    echo "<main class='main-index'>";
    
    planetPres('mars');
    planetPres('moon');
    planetPres('mercury');
    planetPres('venus');

    echo "</main>"

?>
