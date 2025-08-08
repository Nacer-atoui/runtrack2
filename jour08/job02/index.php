<?php

if (!isset($_COOKIE['nbvisites'])){
    setcookie("nbvisites",1);
}

if (isset($_POST['reset'])){
    setcookie("nbvisites",1);
    header('Location: index.php');
    exit;
}

setcookie('nbvisites', $_COOKIE['nbvisites']+1);


?>

<html>
    <body>
<h1><?php echo $_COOKIE['nbvisites'];?> Visite</h1>
        <form method="post">
        <button type="submit" name="reset">Reset</button>
        </form>
    </body>
</html>