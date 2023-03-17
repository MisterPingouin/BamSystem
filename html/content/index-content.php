<?php

    function planetPres($planetPresName) {
        $planetPresTitle = strtoupper($planetPresName);
        $planetPresImg = "/assets/planets/sd/$planetPresName-sd.png' alt='planet $planetPresName";
        $planetPresId = "planet-$planetPresName";

        include 'html/content/planet-pres-content.php';
    };

    planetPres('mars');
    planetPres('moon');
    planetPres('mercury');
    planetPres('venus');

?>
