<?php

$nombre = [200, 204, 98, 171, 404, 459];

foreach ($nombre as $x) {
    if ($x % 2 == 0){
        echo "$x est pair<br/>";
    }
    else {
        echo "$x est impair<br/>";
    }
    
}

?>