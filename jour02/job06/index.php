<?php
// avec un echo <pre> on garde les espaces et retours à la ligne commes ils sont
echo "<pre>";
// on défini la taille de la forme du rectangle avec deux variable $hauteur et $largeur
$largeur = 20;
$hauteur = 10;
// avec $y on va fair une boucle qui fait ré-itérer 
// $y de la valeur qu'on donne à la variable hauteur (ici 10)
// en disant qu'il fait une boucle tant que $y est inférieur ou égal à $hauteur
for ($y = 1; $y <= $hauteur; $y++) {
    
// on fait une deuxième boucle dans la première (boucle imbriquer)
// cette fois-ci pour que $x (largeur) soit égale la valeur de $largeur (ici 20)
    for ($x = 1; $x <= $largeur; $x++) {
        // si on est au debut ou à la fin de la ligne on affiche une * si non on affiche un espace 
        if ($x == 1 || $x == $largeur) {
            echo "*"; //echo "|";
        }

        else {
            echo "&nbsp";
        }
// si on est sur la première ou la dernière ligne on affiche des *
// sauf au dernier caractère ($x < $largeur) pour evité de doubler dans le coin
        if ($y == 1 && $x < $largeur || $y == $hauteur && $x < $largeur){
            echo "*"; //echo "-";
        }

        else {
            echo "&nbsp";
        }

    }
// à la fin de chaque ligne on passe à la ligne suivante
echo "<br/>";

}

echo "</pre>";
// echo "*<br/>";


// for($i = 0; $i <= $largeur ; $i++){
//     echo "* ";
// }

?>