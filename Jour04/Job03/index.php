<?php
    session_start();

    if (isset($_POST['reset'])){
        $_SESSION["name"] = [];
    }

    if (isset($_SESSION["name"]) && isset($_POST["prenom"])){
        $nbVisites = $_SESSION["name"];
    } else {
        $nbVisites = [];
    }  

    if (isset($_POST['prenom']) && $_POST['prenom'] != '') {
        $nbVisites[] = $_POST['prenom'];
        $_SESSION["name"] = $nbVisites;
    } else {
        $_SESSION["name"] = [];
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
    <form action='index.php' method="post">
        <label for="prenom">Prenom : </label>
        <input type="text" name="prenom">
        <button type="submit" name="add">Send</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <h1><?php 
            if (isset($_SESSION["name"]) && $_SESSION["name"] != []){
                foreach($_SESSION["name"] as $n){
                    echo "Prenom : ". $n."<br>";
                }
            }?></h1>
</body>
</html>