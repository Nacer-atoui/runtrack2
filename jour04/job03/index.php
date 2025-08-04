<?php

$nb_argument = 0;
$argument = array('mail', 'pseudo');


foreach ($argument as $arguments){
  if (isset($_POST[$arguments]) && $_POST[$arguments] <> ""){
    $nb_argument++;

  }
  }
  echo "le nombre d'arguments envoyé est :" . $nb_argument;


//     $mail = trim($_POST['mail']);
//     $pseudo = trim($_POST['pseudo']);
// if (!empty($mail) && !empty($pseudo)){
//     echo "Le nombre d’argument POST envoyé est : 2";
// }
// elseif (!empty($mail) || !empty($pseudo)){
//     echo "Le nombre d’argument POST envoyé est : 1";
// }
// else {
//     echo "Le nombre d’argument POST envoyé est : 0";
// }




?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="mail">E-mail :</label>
        <input type="e-mail" name="mail" id="mail"/><br/><br/>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo"/><br/><br/>
        <input type="submit" value="Envoyer"/>
        
    </form>
</body>
</html>