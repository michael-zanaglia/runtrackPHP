<?php
    setcookie("nbVisites", 0, time() + 3600);

    if (isset($_POST['reset'])){
        $_COOKIE["nbVisites"] = 0;
    }

    if (isset($_COOKIE["nbVisites"])){
        $nbVisites = $_COOKIE["nbVisites"];
    } else {
        $nbVisites = 0;
    }  

    $nbVisites += 1;
    setcookie("nbVisites",$nbVisites,time() + 3600);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Visité : ".$_COOKIE["nbVisites"];?></h1>
    <form action='index.php' method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>