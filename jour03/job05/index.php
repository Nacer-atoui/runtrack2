<?php

$str = "on n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = [ 'voyelles' => 0,
         'consonnes' => 0
]; 
$voyelles = "aeiouy";

for ($i = 0; $i < 65; $i++){
    $lettre = $str[$i];
        if (!( ($lettre >= 'a') && ($lettre <= 'z') )) {
            continue;
        }

        $isvoy = false;

        for ($x = 0; $x < 6; $x++){
            if ($lettre == $voyelles[$x]){
            $isvoy = true;
            break;
            }
        }
        if ($isvoy){
            $dic['voyelles']++;
        }
        else {
            $dic['consonnes']++;
        }
}

echo "<table border='1'>
        <thead>
        <tr>
            <th>consonnes</th>
            <th>voyelles</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
    </table>";



    




?>