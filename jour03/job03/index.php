<?php
// on cherche les voyelles de la chaine de caractere et on veut les afficher donc on fait une variable avec la chaine de caractere et un tableau avec la liste de voyelle
$str = ("I'm sorry Dave I'm afraid I can't do that");
$tableauVoyelle = array ('a', 'e', 'i', 'o', 'u', 'y');

//on fait une boucle $i pour parcourir la chaine de caractere qui contient 41 caractere
for($i = 0; $i < 41; $i++){

    //on parcour le tableau de voyelle avec un foreach et on indique avec "as" qu'il devien $voyelle (une nouvelle variable) et on met une condition if qui indique que si $str avec la cle [$i] (qui fait la boucle de ma chaine de caractere donc un caractere a la fois sera analyser) est egal a mon tableau de voyelle donc la nouvelle variable $voyelle alors affiche les $voyelles
foreach ($tableauVoyelle as $voyelle){
    if ($str[$i] == $voyelle){ 
    echo "$voyelle";
    }
    
}
}

?>