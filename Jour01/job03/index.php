<!DOCTYPE html>
<html>
<head>
    <title>Job03</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        .headerTable{
            background-color: #a4181b;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding : 5px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
    $int = 10;
    $float = 5.20;
    $string = "Hello world.";
    $bool = true;
    echo '<table>';
        echo '<thead>';
            echo '<tr>
                    <th class="headerTable">Type</th>
                    <th class="headerTable">Nom</th>
                    <th class="headerTable">Valeur</th>
                </tr>';
        echo '</thead>';
        echo '<tbody>';
            echo '<tr>
                    <th>'.gettype($int).
                    '</th><th>$int</th><th>'
                    .$int.'</th>
            </tr>';
            echo '<tr>
                    <th>'.gettype($float).
                    '</th><th>$float</th><th>'
                    .$float.'</th>
            </tr>';
            echo '<tr>
                    <th>'.gettype($string).
                    '</th><th>$string</th><th>'
                    .$string.'</th>
            </tr>';
            echo '<tr>
                    <th>'.gettype($bool).
                    '</th><th>$bool</th><th>'
                    .($bool ? 'true' : 'false').'</th>
            </tr>';
        echo '</tbody>';
        
    echo '</table>';
?>