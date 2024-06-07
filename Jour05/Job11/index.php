<?php
    $serverName = "localhost:3307"; // ip où est stocker la bdd
    $user = "root";
    $mdp = ""; 

    try {
        $db = new PDO("mysql:host=$serverName;dbname=jour05;charset=utf8", $user, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion Reussi !";
    } catch(PDOException $e) {
        echo "Erreur :". $e->getMessage();
    }

    $req = $db -> prepare("SELECT nom, capacite FROM salle ORDER BY capacite DESC");
    $req -> execute();
    $res = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            text-align : center;
        }
        th, td {
            padding : 10px;
            border : 1px solid black;
        }
        thead {
            background-color : grey;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($res as $array){
                    echo "<tr>
                        <td>{$array['nom']}</td>
                        <td>{$array['capacite']}</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>