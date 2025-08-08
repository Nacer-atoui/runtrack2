<?php

function calcule($a, $operation, $b){
    if ($operation == "+"){
        $result = $a + $b;
        return $result;
    }
    if ($operation == "*"){
        $result = $a * $b;
        return $result;
    }
    if ($operation == "-"){
        $result = $a - $b;
        return $result;
    }
    if ($operation == "/"){
        $result = $a / $b;
        return $result;
    }
    if ($operation == "%"){
        $result = $a % $b;
        return $result;
    }
        

}

echo calcule(10,"+", 2);
echo "<br/>";
echo calcule(10, "*", 2);
echo "<br/>";
echo calcule(10, "-", 2);
echo "<br/>";
echo calcule(10, "/", 2);
echo "<br/>";
echo calcule(10, "%", 2);

?>