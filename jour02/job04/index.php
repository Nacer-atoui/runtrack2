<?php 

// on fait une boucle for avec un depart à la valeur 1
// on veut les nombre de 1 à 100 donc on demande à ce que $i soit inférieur à 101
// avce une incrementation pour itérer de 1 à chaque tour
for ($i = 1; $i < 101; $i++){
    // on veut les que les multiple de 3 et de 5 donc 15 affiche fizzbuzz
// on commence avec une condition qui stipule que si le reste d'une division de 15 est un nombre entier (0)
// on affiche fizzbuzz
     if($i % 15 == 0){
        echo "FizzBuzz <br/>";
    }
    // on fait la meme chose avec les multiple de 3 en utilisant toujours un modulo
    // donc si c'est un multiple de 3 on affiche fizz
    elseif ($i % 3 == 0) {
    echo "Fizz <br/>";
}
    // on continu de la même manière cette foi-ci avec les multiple de 5 qui affiche buzz
    elseif($i % 5 == 0) {
        echo "Buzz <br/>";
    }
   
// enfin on affiche tout les autres normalement
    else {
        echo "$i <br/>";
    } 

   
    

}



?>