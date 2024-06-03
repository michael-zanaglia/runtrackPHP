<?php
    function calcul($nb1, $operator, $nb2){
        // switch/case est aussi une bonne maniere de faire.
        if($operator == "+"){
            $result = $nb1 + $nb2;           
        }else if($operator == "-"){
            $result = $nb1 - $nb2;
        }else if($operator == "*"){
            $result = $nb1 * $nb2;
        }else if ($operator == "/"){
            $result = $nb1 / $nb2;
        }else if($operator == "%") {
            $result = $nb1 % $nb2;
        }
        return $result;
    }

    $result = calcul(9, "+", 1);
    echo $result."<br>";
    $result = calcul(11, "-", 1);
    echo $result."<br>";
    $result = calcul(5, "*", 2);
    echo $result."<br>";
    $result = calcul(20, "/", 2);
    echo $result."<br>";
    $result = calcul(10, "%", 2);
    echo $result."<br>";
?>