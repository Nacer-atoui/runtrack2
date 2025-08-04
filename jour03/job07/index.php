<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newstr = ' ';

// $longueur = strlen($str);
$longueur = 0;

    while (isset($str[$longueur])){
        $longueur++;
    }

// for ($i = 1; $i < $longueur; $i++){
//     // $newstr = substr($str, 1, $longueur-1);
//     $newstr[$i] = $str[$i+1];
    
//     echo $newstr[$i];
// }

for ($i = 0; $i < $longueur -1; $i++){

echo $str[$i+1];
}

echo $str[0] . "<br/>";