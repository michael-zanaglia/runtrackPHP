<?php
    $count = 0;
    foreach($_GET as $arg){
        echo "$arg<br>";
        $count += 1;
    }

    echo "Il y a dans _GET $count argument(s).";
?>