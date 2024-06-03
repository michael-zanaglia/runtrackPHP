<?php
    function gras($texte){
        $texte = str_split($texte);
        foreach ($texte as $letter) {
            echo (ctype_upper($letter) ? "<b>$letter</b>" : $letter );
        }
    }
    function cesar($texte, $saut){
        $texte = strtolower($texte);
        $alphabet = '';
        $phrase = '';

        // Parcourir les lettres de 'a' à 'z'
        for ($i = 97; $i <= 122; $i++) {
            $alphabet .= chr($i);
        }

        for ($i = 0; $i < strlen($texte); $i++){
            if (ctype_alpha($texte[$i])){
                for ($y = 0; $y < strlen($alphabet); $y++){
                    if($texte[$i] == $alphabet[$y]) {
                        $phrase .=  $alphabet[($y+$saut)%26];
                    }
                }
            } else {
                $phrase .= $texte[$i];
            }
        }
        echo ucfirst($phrase);    
    }

    function plateforme($texte){
        $result = '';
        for ($i = 0; $i < strlen($texte); $i++){
            if (ctype_alpha($texte[$i])){
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

// VERSION CHATGPT POUR PLATEFORME --------------
//function afficherUnderscore($phrase) {
//$mots = explode(" ", $phrase);
//$resultat = array();
//foreach ($mots as $mot) {
//    if (substr($mot, -2) === "me") {
//        $resultat[] = substr($mot, 0, -2) . "_";
//    } else {
//        $resultat[] = $mot;
//    }
//}
//return implode(" ", $resultat); reconstitut le tableau 
//
//// Exemple d'utilisation :
//$phrase = "Il estime que le programme fonctionne correctement.";
//echo afficherUnderscore($phrase);
?>

