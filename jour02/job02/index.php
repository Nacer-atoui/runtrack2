<?php
// sur ce code on va effectuer une boucle while
// on assigne une valeur a notre variable $i
$i = 0;

// on demande que tant que $i est plus petit que 1338 affiche la valeur de $i 
// sauf si c'est 26, 37, 88, 1111
while ($i < 1338) {
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111){
        $i++;
        continue; 
    }
// tant que c'est pas les nombres qu'on a interdit on affiche la valeur normal
    echo "$i <br/>";

        $i++;
}


    
    
    

    


?>