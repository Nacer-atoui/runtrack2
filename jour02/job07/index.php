<?php
// on défini une hauteur de 5 
// et une largezur qui equivaut au double pour que ca reste symetrique
$hauteur = 5;
$largeur = $hauteur * 2;

function drawLine ($hauteur, $largeur, $y){
    for ($x = 0; $x < $largeur; $x++) {
        // je fait une variable $mid qui définit le milieu horizontal du triangle 
        $mid = $hauteur;
        // ensuite une variable start qui correspond au début donc à la position de /
        $start = $mid - $y - 1;
        // et une variable end qui correspond à la fin donc à la position de \
        $end = $mid + $y;
        // dans la boucle for on demande que si $x est égal au $start donc au bord gauche
        // alors affiche / 
        if ($x == $start) echo "/";
        // sinon si $x est arrivé ou est égal à $end donc le bord droit 
        // alors affiche \
        elseif ($x === $end) echo "\\";
        // si non on met un espace pour garder l'alignement
        else echo "&nbsp;";
    }
    echo "<br/>";
}

echo "<pre>";
// je fais une boucle pour que à chaques lignes j'appele ma fonction creer juste avant 
// sauf à la dernière ligne ($y < $hauteur - 1)
for ($y = 0; $y < $hauteur - 1; $y++){
    drawLine($hauteur, $largeur, $y);
}
// pour la dernière ligne j'affiche au premier un /
echo "/";
// ensuite pour chaque itération tant que c'est inférieur à $largeur - 2
// j'affiche un _
for ($i = 0; $i < $largeur - 2; $i++){
    echo "_";
}
// et je fini par un \
echo "\\";
echo "</pre>";









// $hauteur = 5;

// for($i = 0; $i < $hauteur; $i++)
//     {
//         for ($k = ($hauteur - $i); $k > 0; $k--){
//             echo '&nbsp';
//         }

//         echo "/";

//         echo "<br/>";

// for($i = 0; $i < $hauteur; $i++)
//     {
//         for ($k = ($hauteur + $i); $k > 0; $k--){
//             echo '&nbsp';
//         }




//         echo "\\";

//         echo "<br/>";


//     }

//     }










// for($i = 0; $i < $hauteur; $i++){

//     for ($j = ($hauteur - $i); $j > 0; $j--){
//         echo " ";
//     }

//     for ($k = 0; $k <= $i; $k++){
//         echo " ";
//     }
// echo "0";
// }





?>