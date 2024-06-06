<?php
    if (!isset($_COOKIE["form"])) {
        setcookie("form", true, time() + 3600);
    }

    if(isset($_POST['prenom']) && $_POST['prenom'] != '' ){
        setcookie("form", 0, time()+3600);
        setcookie("prenom", $_POST['prenom'], time() + 3600);
        header("Location: ".$_SERVER['PHP_SELF']);
    }
    if(isset($_POST['deco'])){
        setcookie("form", true, time()+3600);
        setcookie("prenom", '', time() + 3600);
        header("Location: ".$_SERVER['PHP_SELF']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_COOKIE["form"])){
                if($_COOKIE["form"] == '1'){
                    echo "<form action='' method='post'>
                            <label for='prenom'>Prenom : </label>
                            <input type='text' name='prenom'>
                            <button type='submit' name='add'>Connexion</button>
                        </form>";
                } else {
                    echo "Bienvenue ".$_COOKIE['prenom']." !<br>";
                    echo "<form action='index.php' method='post'> <button type='submit' name='deco'>Deconnexion</button> </form>";
                }
        }
        
    ?>
</body>
</html>