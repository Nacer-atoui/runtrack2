<?php 
// on fait une boucle for pour chaque nombre de 0 à 1000 en augmentant de 1 à chaque tour
for($i = 0; $i < 1001; $i++){
// initialisation d'un conteur à 0 (on recommence à 0 à chaque nombre de $i)
    $conteur = 0;
    // on refait une boucle à l'interieur de la première
    // on essaie tout les nombre de 0 à 1000 pour voir si il divisent la valeur de $i
    for($x = 1; $x < 1001; $x++){
// avec un modulo on demande que si le reste de la division de $i par $x vaut 0
// dans ce cas $x est un diviseur de $i
        if ($i % $x == 0){
            // avec $conteur++ on veut que à chaque fois qu'on trouve de le diviseur de $i 
            // on ajoute 1 au compteur
            $conteur ++; 
        }

    }
// si le resultat de $conteur est ègal à 1 
// il est divisible par lui même donc on l'affiche 
if ($conteur == 1){
echo "$i divisible par lui meme <br/>";
}
// si le resultat de $conteur est de 2 alors c'est un nombre premier
elseif ($conteur == 2 ){
    echo "$i nombre premier <br/> ";
}
// si non c'est nombre ordinaire
else 
    echo "$i nombre ordinaire <br/>";
}

?>