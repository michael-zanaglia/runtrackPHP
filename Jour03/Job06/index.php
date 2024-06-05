<?php
    function leetspeak($chaine, $objet){
        $len = 0;
        while(isset($chaine[$len])){
            $len++;
        }
        for($letter=0; $letter < $len; $letter++){
            echo (isset($objet[$chaine[$letter]]) ? $objet[$chaine[$letter]] : $chaine[$letter]);
        }
    }
    $objet = array(
        'a' => '4', 'A' => '4',
        'b' => '8', 'B' => '8',
        'c' => '(', 'C' => '(',
        'd' => '[)', 'D' => '[)',
        'e' => '3', 'E' => '3',
        'f' => '|', 'F' => '|',
        'g' => '6', 'G' => '6',
        'h' => '#', 'H' => '#',
        'i' => '1', 'I' => '1',
        'j' => '_|', 'J' => '_|',
        'k' => 'X', 'K' => 'X',
        'l' => '£', 'L' => '£',
        'm' => '[V]', 'M' => '[V]',
        'n' => '^/', 'N' => '^/',
        'o' => '0', 'O' => '0',
        'p' => '|*', 'P' => '|*',
        'q' => '()_', 'Q' => '()_',
        'r' => '2', 'R' => '2',
        's' => '5', 'S' => '5',
        't' => '7', 'T' => '7',
        'u' => '|_|', 'U' => '|_|',
        'v' => '\/', 'V' => '\/',
        'w' => 'vv', 'W' => 'vv',
        'x' => '><', 'X' => '><',
        'y' => 'j', 'Y' => 'j',
        'z' => '-', 'Z' => '-'
    );
    
    // pour afficher une list print_r($objet);
    leetspeak("Bonjour LaPlateforme !", $objet);
?>