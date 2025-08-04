<?php

$largeur = $_POST['largeur'] ?? 10;
$hauteur = $_POST['hauteur'] ?? 5;

function triangle($hauteur, $largeur){
for ($i = 0; $i < $hauteur; $i++) {
    
    for ($j = 1; $j < $hauteur - $i; $j++)  {
        echo "&nbsp";
    }
    echo "/";
    for ($j = 0; $j <= $i; $j++) {
        echo "_"; 
    }
    
    echo "\\";
    if ($i != $hauteur ){
echo "<br/>";
}
    
}
}

function rectangle($hauteur, $largeur){

for ($y = 0; $y <= $hauteur; $y++) {
    // echo "&nbsp&nbsp";
    
    for ($x = 0; $x <= $largeur; $x++) {
        
        // echo "&nbsp";
        // echo str_repeat("&nbsp &nbsp", 9);
        if ($x == 0 || $x == $hauteur) {
            echo "|"; //echo "|";
        }

        // else {
        //     echo "&nbsp";
        // }

        if ($y == $hauteur && $x < $hauteur){
            echo "_"; //echo "-";
            
        }
        // elseif ($y == 1 && $x < $largeur){
        //     echo "_";
        // }
        else {
            echo "&nbsp&nbsp";
        }

    }
    echo "<br/>";
}

}

triangle($hauteur, $largeur);
rectangle($hauteur, $largeur);

echo "<br/>";
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
        <label for="largeur">Largeur</label>
        <input type="text" name="largeur" id="largeur"><br/><br/>
        <label for="hauteur">Hauteur</label>
        <input type="text" name="hauteur" id="hauteur"><br/><br/>
        <button type="submit">Créer ma forme</button>
    </form>