<?php

$hauteur = 5;
$largeur = $hauteur * 2;

function drawLine ($hauteur, $largeur, $y){
    for ($x = 0; $x < $largeur; $x++) {
        
        $mid = $hauteur;
        $start = $mid - $y - 1;
        $end = $mid + $y;
        
        if ($x == $start) echo "/";
        elseif ($x === $end) echo "\\";
        else echo "&nbsp;";
    }
    echo "<br/>";
}

echo "<pre>";
for ($y = 0; $y < $hauteur - 1; $y++){
    drawLine($hauteur, $largeur, $y);
}
echo "/";
for ($i = 0; $i < $largeur - 2; $i++){
    echo "_";
}
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