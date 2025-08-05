<?php 


// on fait une boucle for avec un depart a 0 une condition d'aller jusqu'à 100
// en inrémentant de 1 à chaque tour.

for($i = 0; $i < 101; $i++) {
    // on demande que si la valeur de $i est inférieur à 21
    // affiche les valeurs en italique donc les nombre de 0 à 21 vont s'afficher en italique 
    if ($i < 21) {
       
        echo "<i> $i </i> <br/>";

    } 
    // on rajoute une condition avec elseif qui veut dire si non si ....
    // donc si $i est supérieur ou égal à 21 et (&&) inférieur ou égal à 24
    // alor affiche la valeur normal
    // du coup tout les nombre entre 20 et 25 seront afficher normalement
    elseif($i >= 21 && $i <= 24){
        echo "$i<br/>";
    }
    // encore une condition qui dit que si $i est supérieur ou égal à 25
    // et que $i est inférieur ou égal à 50
    // et dans cette condition on en veut une autre qui est si $i est strictement égal à 42
    // affiche à la place de la valeur "La Plateforme_"
    elseif($i >= 25 && $i <= 50){
        if ($i == 42){
            echo "La Plateforme_<br/>";
        }
// ici c'est la même chose mais on veut que si la variable $i est entre 25 et 50
// on l'affiche sous-ligné
    elseif($i >= 25 && $i <= 50){
        if ($i<=50){
        echo "<u> $i </u> <br/>";
        }

    }
}
// ici on demande que tout le reste donc entre 50 et 100 on affiche la valeur normalement
    elseif ($i > 50 && $i <= 100){
        echo "$i<br/>";
    }

   


  

}



        
    
    


    

   


?>