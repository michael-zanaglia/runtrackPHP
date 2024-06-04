<?php
    $h = (isset($_GET["h"]) ? $_GET["h"] : false );
    $l = (isset($_GET["l"]) ? $_GET["l"] : false );

    try {
        if(ctype_digit($h) && ctype_digit($l)){
            for ($i = 0; $i < ($l/2)-1; $i++){echo "&nbsp;";}
            $espace = $l/2;
            echo '/\<br>';
            for ($i = ($l/2) - 1; $i > 0; $i--){
                $espace -= 1;
                for ($s = $espace; $s > 1; $s--){
                    echo "&nbsp;";
                }
                echo "/";
                for ($y = 0; $y < (($l/2) - $i); $y++){
                    echo "_";
                } 
                echo "\<br>";
            }
            for ($i = 0; $i < $h; $i++){
                if ($i < ($h-1)){
                    echo "|";
                    for ($y = 0; $y < $l; $y++){echo "&nbsp;";} 
                    echo "|<br>";  
                } else {
                    echo "|";
                    for ($y = 0; $y < ($l/2); $y++){echo "_";} 
                    echo "|"; 
                }
                
            }
            for ($y = 0; $y < $l; $y++){
                echo "&nbsp;";} 
        } else {
            throw new Exception('erreur digits');
        }
    } catch (Exception $e){
        echo "err digit";
    }
?>