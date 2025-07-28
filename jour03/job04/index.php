<?php

$str = "Dans l'espace, personne ne vous entend crier";

function countCarac($str){
    $i = 0;

    while (isset($str[$i])){
        $i++;
    }

    return $i;
}

$result = countCarac($str);
echo "le nombre de cractère dans la phrase est de : " .$result;





// foreach ($str as $value){
//     $x++; 
// }

//     echo "le nombre de caractere dans la phrase est de : " . $x;


?>