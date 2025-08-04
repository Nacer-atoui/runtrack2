<?php

if (isset($_GET['nombre'])) {
    foreach ($_GET as $x) {
        if ((int)$x % 2 == 0 && $_GET !== ''){
            echo "$x est pair";
        }
        elseif ($x % 2 > 0 && $_GET !== '') {
            echo "$x est impair";
        }
    
        
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
     
        <button type="submit">Envoyer</button>
    </form>