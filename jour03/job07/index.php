<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$longueur = 0;
// ici dans cette boucle while on compte avec isset 
// combien de caractère il y a dans la chaine de caractères
    while (isset($str[$longueur])){
        $longueur++;
    }


// ici on fait une boucle for pour parcourir la chaine de caractères
// avec un depart à 0 on parcour tant que $i est inférieurà l'avant dernière lettre
for ($i = 0; $i < $longueur -1; $i++){
// et on affiche chaque caractères en commencant par la 2ème lettre
echo $str[$i+1];
}
// on affiche la premiere lettre à la fin
echo $str[0] . "<br/>";
?>