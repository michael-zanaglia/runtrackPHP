<?php
    $count = 0;
    foreach($_POST as $arg){
        echo "$arg<br>";
        $count += 1;
    }

    echo "Il y a dans _POST $count argument(s).";
?>