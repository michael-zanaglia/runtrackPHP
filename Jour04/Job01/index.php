<?php
    session_start();

    if (isset($_POST['reset'])){
        $_SESSION["nbVisites"] = 0;
    }

    if (isset($_SESSION["nbVisites"])){
        $nbVisites = $_SESSION["nbVisites"];
    } else {
        $nbVisites = 0;
    }  

    $nbVisites += 1;
    $_SESSION["nbVisites"] = $nbVisites;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Visité : ".$_SESSION["nbVisites"];?></h1>
    <form action='index.php' method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>