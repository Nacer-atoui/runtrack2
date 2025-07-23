<?php
echo "<pre>";
$largeur = 20;
$hauteur = 10;

for ($y = 1; $y <= $hauteur; $y++) {
    

    for ($x = 1; $x <= $largeur; $x++) {
        // echo "*";
        // echo "&nbsp";
        // echo str_repeat("&nbsp &nbsp", 9);
        if ($x == 1 || $x == $largeur) {
            echo "*"; //echo "|";
        }

        else {
            echo "&nbsp";
        }

        if ($y == 1 && $x < $largeur || $y == $hauteur && $x < $largeur){
            echo "*"; //echo "-";
        }
        else {
            echo "&nbsp";
        }

    }

echo "<br/>";

}

echo "</pre>";
// echo "*<br/>";


// for($i = 0; $i <= $largeur ; $i++){
//     echo "* ";
// }

?>