<?php
    $max = 0;
    while($max <= 100) {
        if (($max % 3 == 0) && ($max % 5 == 0)){
            echo "FizzBuzz<br>";
        } else if (($max % 3 == 0)){
            echo "Fizz<br>";
        } else if (($max % 5 == 0)){
            echo 'Buzz<br>';
        } else {
            echo "$max<br>";
        }
        $max ++;
    }
?>