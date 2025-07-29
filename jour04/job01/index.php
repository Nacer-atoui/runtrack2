<?php

echo "Le nombre d’argument GET envoyé est :"  . count($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="mail">E-mail :</label>
        <input type="e-mail" name="mail" id="mail"/><br/><br/>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo"/><br/><br/>
        <input type="submit" value="Envoyer"/>
        
    </form>
</body>
</html>