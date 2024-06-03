<?php
    $max = 0;
    while($max <= 1337) {
        echo ($max != 26 && $max != 37 && $max != 88 && $max != 1111 ? "$max<br>": null);
        $max ++;
    };
?>