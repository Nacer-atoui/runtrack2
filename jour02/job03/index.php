<?php 



for( $i = 0; $i < 101; $i++) {
    if ($i < 21) {
       
        echo "<i> $i </i> <br/>";

    } 
    elseif($i >= 21 && $i <= 24){
        echo "$i<br/>";
    }

    elseif($i >= 25 && $i <= 50){
        if ($i == 42){
            echo "La Plateforme_<br/>";
        }

    elseif($i >= 25 && $i <= 50){
        if ($i<=50){
        echo "<u> $i </u> <br/>";
        }

    }
}

    elseif ($i > 50 && $i <= 100){
        echo "$i<br/>";
    }

   


  

}



        
    
    


    

   


?>