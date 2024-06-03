<?php
    function leetspeak($chaine, $objet){
        $chaine = strtolower($chaine);
        $chaine = str_split($chaine);
        foreach($chaine as $letter){
            echo (isset($objet[$letter]) ? $objet[$letter] : $letter);
        }
    }
    $objet = array(
        'a' => '4',
        'b' => '8',
        'c' => '(',
        'd' => '[)',
        'e' => '3',
        'f' => '|',
        'g' => '6',
        'h' => '#',
        'i' => '1',
        'j' => '_|',
        'k' => 'X',
        'l' => '£',
        'm' => '[V]',
        'n' => '^/',
        'o' => '0',
        'p' => '|*',
        'q' => '()_',
        'r' => '2',
        's' => '5',
        't' => '7',
        'u' => '|_|',
        'v' => '\/',
        'w' => 'vv',
        'x' => '><',
        'y' => 'j',
        'z' => '-'
    );
    // pour afficher une list print_r($objet);
    leetspeak("Bonjour LaPlateforme !", $objet);
?>