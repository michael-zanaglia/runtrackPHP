<?php
    function occurences($str, $char){
        $result = 0;
        for ($i= 0; $i < strlen($str); $i++){
            ($str[$i] == $char ? $result++ : null);
        }
        return $result;
    }
    $str = "Bonjour";
    $char = "o";

    $result = occurences($str, $char);
    echo "Le nombre d'occurence de '$char' est de $result fois."

?>