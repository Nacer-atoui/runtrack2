<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
// on creer une variable pour parcourir la chaine de caractères elle commence à 0

$i = 0;
// la boucle while repete le code tant que la condition est vraie
// on lui demande que tant que $i est plus petit que 76 il continu à lire les caractères
while ($i < 76) {
// on demande d'afficher le caractère qui est à la position de $i
    echo $str[$i];
    // on augmente $i de 2 a chaque tour pour afficher un caractère sur deux 
     $i = $i + 2;

}
   
    







// for ($str = 0; $str <= 50; $str++){
    //     if ($str % 2 == 0){
    //         echo "&nbsp";
    //     }
    //     else {
    //         echo "$str";
    //     }
    // }
    
?>