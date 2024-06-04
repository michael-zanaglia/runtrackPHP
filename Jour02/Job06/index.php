<?php
    try {
        if (ctype_digit($_GET["num"])){
            if ($_GET["num"]%2 == 0){
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            } 
        } else{
            throw new Exception('Entrez uniquement un chiffre ou un nombre.');
        }
        
    } catch(Exception $e) {
        echo 'Entrez uniquement un chiffre ou un nombre.';
        
    }
        
    
?>