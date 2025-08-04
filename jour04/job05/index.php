<?php
if (isset($_POST['pseudo']) and $_POST['pseudo'] == "John" and $_POST['mdp'] == "rambo"){
    echo "C'est pas ma guerre";
}
else{
    echo "Votre pire cauchemard";
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
    <form action="" method="POST">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp">
        <input type="submit" value="Envoyer"/>
    </form>