<?php
    session_start();

    setcookie("player", "X", time() + 3600);
    $_SESSION["game"] = 0;
    $_SESSION["board"] = ['-','-','-',
                          '-','-','-',
                          '-','-','-'];
    
    if(isset($_POST['case'])){
        makeMove();
    }
    
    

    function makeMove(){
        if ($_SESSION["board"][  $_POST['case'] - 1] == '-'){
            if($_COOKIE["player"]=='X'){
                $_SESSION["board"][  $_POST['case'] - 1] = $_COOKIE["player"]; 
                $_SESSION["game"] = 1;
                setcookie("player", "O", time() + 3600);
            } else {
                $_SESSION["board"][  $_POST['case'] - 1] = $_COOKIE["player"]; 
                $_SESSION["game"] = 1;
                setcookie("player", "X", time() + 3600);
            }
        } 
        foreach ($_SESSION["board"] as $board){
            echo $board. "<br>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
       <table>
            <tbody>
                <tr>
                    <th id='one'><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][0]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='1'></button>"
                    ?></th>
                    <th><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][1]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='2'></button>"
                    ?></th>
                    <th><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][2]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='3'></button>"
                    ?></th>
                </tr>
                <tr>
                    <th id='two'><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][3]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='4'></button>"
                    ?></button></th>
                    <th><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][4]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='5'></button>"
                    ?></th>
                    <th><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][5]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='6'></button>"
                    ?></th>
                </tr>
                <tr>
                    <th id='three' class='bot'><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][6]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='7'></button>"
                    ?></th>
                    <th class='bot'><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][7]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='8'></button>"
                    ?></th>
                    <th class='bot'><?php echo ($_SESSION["game"]==1 && $_SESSION['board'][8]!='-') ?
                     "<span>".$_COOKIE['player']."</span>": "<button type='submit' class='btn' name='case' value='9'></button>"
                    ?></th>
                </tr>
            </tbody>
        </table> 
    </form>
    
</body>
</html>