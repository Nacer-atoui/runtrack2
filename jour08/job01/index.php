<?php

session_start();


if (!isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites'] = 0;
}
if (isset($_POST['reset'])){
    $_SESSION['nbvisites'] = -1;
    header("Refresh:0");
}

$_SESSION['nbvisites']++;

// $nbvisites = fopen('counter.txt', 'c+');
// $count = intval(fgets($nbvisites));
// $count++;


// fseek($nbvisites, 0);
// fputs($nbvisites, $count);
// fclose($nbvisites);

// echo $count;

// $reset = $_POST;





?>

<html>
    <body>
<h1><?php echo $_SESSION['nbvisites'];?> Visite</h1>
        <form method="post">
        <input type="submit" action= 'index.php' name="reset" value="Reset">
        </form>
    </body>
</html>