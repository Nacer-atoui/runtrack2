<?php 


for ($i = 1; $i < 101; $i++){

     if($i % 15 == 0){
        echo "FizzBuzz <br/>";
    }
    
    elseif ($i % 3 == 0) {
    echo "Fizz <br/>";
}
    
    elseif($i % 5 == 0) {
        echo "Buzz <br/>";
    }
   

    else {
        echo "$i <br/>";
    } 

   
    

}



?>