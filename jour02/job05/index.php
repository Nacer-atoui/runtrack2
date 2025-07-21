<?php 

for($i = 0; $i < 1001; $i++){

    $conteur = 0;
    for($x = 1; $x < 1001; $x++){

        if ($i % $x == 0){
            $conteur ++; 
        }

    }

if ($conteur == 1){
echo "$i divisible par luimeme <br/>";
}
elseif ($conteur == 2 ){
    echo "$i nombre premier <br/> ";
}
else 
    echo "$i nombre ordinaire <br/>";
}

?>