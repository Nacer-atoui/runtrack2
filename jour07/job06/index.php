<?php

function leetSpeak($str){
    $ls = [
            "A" => 4, "a" => 4,
            "B" => 8, "b" => 8,
            "E" => 3, "e" => 3,
            "G" => 6, "g" => 6,
            "L" => 1, "l" => 1,
            "S" => 5, "s" => 5,
            "T" => 7, "t" => 7,
    ];
$a = '';
    
for ($i = 0; isset($str[$i]); $i++){
    $x = false;
    foreach ($ls as $key => $value){
        if ($str[$i] == $key){
          $a = $a . $ls[$key];
          $x = true;
        }
        
        }
        if ($x != true)
            $a = $a . $str[$i];
            
}
return $a;

    
}

echo leetSpeak("Salut les amis");
?>