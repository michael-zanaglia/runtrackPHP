<?php
    $max = 0;
    while($max <= 100) {
        if ($max <= 20 ){
            echo "<i>$max</i><br>";
        } else if ($max >= 25 && $max <=50 && $max != 42){
            echo "<u>$max</u><br>";
        } else if ($max == 42){
            echo 'LaPlateforme_<br>';
        }
        $max ++;
    }
?>