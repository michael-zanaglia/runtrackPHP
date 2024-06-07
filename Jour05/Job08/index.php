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

    $req = $db -> prepare("SELECT COUNT('id') AS nb_etudiants FROM etudiant");
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
                <th>Nombre d'étudiants</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($res as $array){
                    echo "<tr>
                        <td>{$array['nb_etudiants']}</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>