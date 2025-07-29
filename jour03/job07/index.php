<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newstr = ' ';
$longueur = strlen($str);

for ($i = 1; $i < $longueur; $i++){
    $newstr = substr($str, 1, $longueur-1);
}
$newstr .= substr($str, 0,1 );

echo $newstr;