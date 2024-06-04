<!DOCTYPE html>
<html>
<head>
    <title>Job4</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        .entete {
            background-color: #b4b0b0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding : 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    
    echo "<table>";
        echo "<thead class='entete'>";
            echo "<tr>
                <th>Clé</th>
                <th>Valeur</th>
             </tr>";
        echo "</thead>";
        echo "<tbody>";
            foreach($_POST as $key => $val){
                if ($val) {
                    echo "<tr>
                        <th>$key</th>
                        <th>$val</th>
                    </tr>";
                } else {
                    echo "<tr>
                        <th>$key</th>
                        <th>Pas de valeur</th>
                    </tr>";
                }
            }
        echo "</tbody>";
    echo "</table>";
?>