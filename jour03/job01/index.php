<?php
// ici on donne comme valeur à notre variable $nombre
// un tableau grâce au [] et à l'interieur on met les valeurs dont on à besoins
$nombre = [200, 204, 98, 171, 404, 459];
// avec un foreach on parcour le tableau et pour chaque valeur de $nombre 
// on l'appel $x et on va fair quelque chose avec
foreach ($nombre as $x) {
    // on met une condition qu idit que si $x (donc une valeur du tableau)
    // est divisible par 2 et qu'il ne reste rien (0) il est pair
    if ($x % 2 == 0){
        echo "$x est pair<br/>";
    }
    // si non il est impair
    else {
        echo "$x est impair<br/>";
    }
    
}

?>