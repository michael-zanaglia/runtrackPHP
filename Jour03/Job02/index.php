<?php
    function bonjour($bool){
        echo ($bool ? 'Bonjour' : 'Bonsoir').'<br>';
    }
    $jour = true;
    bonjour($jour);
    $jour = false;
    bonjour($jour);
?>