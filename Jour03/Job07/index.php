<?php
    function gras($texte){
        $maj = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y', 'Z'
        ];
        $len = 0;
        while(isset($texte[$len])){
            $len++;
        }
        for ($letter = 0; $letter < $len; $letter++){
            $verif = false;
            foreach($maj as $M){
                if ($texte[$letter] == $M){
                    $verif = true;
                    echo "<b>".$texte[$letter]."</b>";
                } 
            }
            if(!$verif){
                echo $texte[$letter];
            }
        }
    }
    function cesar($texte, $saut){
        $maj = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y', 'Z'
        ];
        $min = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
            'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
            'u', 'v', 'w', 'x', 'y', 'z'
        ];
        $phrase = '';
        $len = 0;

        while(isset($texte[$len])){
            $len++;
        }

        for ($i = 0; $i < $len; $i++){
            $verif = false;
            foreach($min as $m){
                if ($texte[$i] == $m ){
                    for($x = 0; $x < 26; $x++){
                        if($min[$x] == $m){
                            echo $min[$x]." MIN <br>";
                            $phrase .= $min[($x+$saut)%26];
                            $verif = true;
                        }
                    }
                }
            }
            
            foreach($maj as $M){
                if ($texte[$i] == $M ){
                    for($y = 0; $y < 26; $y++){
                        if($maj[$y] == $M){
                            echo $maj[$y]." MAJ <br>";
                            $phrase .= $maj[($y+$saut)%26];
                            $verif = true;
                        }
                    }
                }
            }

            if (!$verif){
                $phrase .= $texte[$i];
            }
            
        }
        echo $phrase;    
    }

    function plateforme($texte){
        $len = 0;
        while(isset($texte[$len])){
            $len++;
        }
        $result = '';
        for ($i = 0; $i < $len; $i++){
            if (isset($texte[$i])){
                if($texte[$i] == 'm' && $texte[$i+1] == 'e' && $texte[$i+2] == ' '){
                    $result .=  '_';
                    $i = $i+1 ; 
                } else {
                    $result .= $texte[$i];
                }
            } else {
                $result .= $texte[$i];
            }
        }

        echo $result;
    }

    if (isset($_POST["texte"])){
        $texte = $_POST['texte'];
    }
    if (isset($_POST["options"])){
        $option = $_POST['options'];
        if ($option == "Gras"){
            gras($texte);
        } else if($option == "César"){
            cesar($texte, 2);
        } else if($option == "Plateforme"){
            plateforme($texte);
        }
    }