<?php

session_start();


if (!isset($_SESSION['prenom'])){
    $_SESSION['prenom'] = [];
    
}
if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))){
    $prenom = $_POST['prenom'];
    $_SESSION['prenom'][] = $prenom;
}

if (isset($_POST['reset'])){
    $_SESSION['prenom'] = [];
   
    

}



?>


<html lang="fr">
    <body>
        <form action="" method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom"><br/><br/>
            <button type="submit" name="valide">Validez</button>
            <button type="submit" name="reset">Reset</button>
        </form>
        <ul>
            <?php
            foreach ($_SESSION['prenom'] as $prenom){
                echo "<li>$prenom</li>";
            }
            ?>    
        </ul>
            </body>
            </html>