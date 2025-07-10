<?php

$varBool = true; 
$varInt = 20; 
$varFloat = 2.13; 
$varString = "Hello"; 



$fonctionArray = [
   [1, 2],
   [3, 4],
];



$variables = [
    'varBool' => $varBool,
    'varInt' => $varInt,
    'varFloat' => $varFloat,
    'varString' => $varString
];

?>

<table>
    <thead>
   <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
   </tr>
</thead>
<tbody>
    <?php foreach ($variables as $name => $value): ?>

        <tr>
            <td> <?php echo gettype($value); ?> </td>
            <td> <?php echo $name; ?> </td>
            <td> <?php if (is_bool($value)) {
                echo $value ? 'true' : 'false';
            }
            else {
                echo htmlspecialchars((string) $value);
            } ?>
            </td>
        </tr>

    <?php endforeach; ?>

</tbody>
    