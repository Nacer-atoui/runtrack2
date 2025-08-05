<?php

$varBool = true; //une variable type Booléen
$varInt = 20; //une variable type int
$varFloat = 2.13; //une variable type float (nombre décimal)
$varString = "Hello"; //une variable type string


// Je donne comme valeur à ma variable la structure d'un tableau type array
// grâce au crochets 
$fonctionArray = [
   [1, 2],
   [3, 4],
];


// je donne comme valeurs à ma variable un tableau 
// avec des clés et des valeurs qui leurs correspondent
// système de keys => Values
$variables = [
    'varBool' => $varBool,
    'varInt' => $varInt,
    'varFloat' => $varFloat,
    'varString' => $varString
];

?>
<!-- création d'un tableau en html avec l'element "table" -->
<table>
    <thead>
   <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
   </tr>
</thead>
<tbody>
    <!-- avec un foreach on demande à parcourir notre tableau
     avec as donc on lui demande de stocké pour chaque element
     la clé dans $name et la valeur dans $value  -->
    <?php foreach ($variables as $name => $value): ?>

        <tr>
            <!-- grace au gettype on veut qu'il nous donne le type
             de chaque variable $value -->
            <?php echo gettype($value); ?> 
              <!-- on veut afficher la valeur de la variable $name -->
            <td> <?php echo $name; ?> </td>
            <!-- on demande grace a if is_bool si $value est un Booléen
             si c'est le cas affiche ce qu'il y a dans echo --
            du coup si $value est true affiche true si non (:) affiche false -->
            <td> <?php if (is_bool($value)) {
                echo $value ? 'true' : 'false';
            }
            else {
                echo htmlspecialchars((string) $value);
            } ?>
            </td>
        </tr>
<!-- fin de boucle foreach -->
    <?php endforeach; ?>

</tbody>
    