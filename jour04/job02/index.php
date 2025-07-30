<?php
$name2 = $_GET['name2'];
$name = $_GET['name']; 



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <label for="name2">Prénom</label>
        <input type="text" name="name2" id="name2">
        <input type="submit" value="Envoyer"/>
    </form>
    <br/>
    <br/>
    <table border="1">
        <thead>
            <th>Argument</th>
            <th>Valeur</th>
        </thead>
        <tbody>
            <td>Nom</td>
            <td> <?php echo $name;?>
            </td>
        </tbody>
        <tbody>
        <td>Prénom</td>
        <td><?php echo $name2;?></td>
    </tbody>
    </table>
</body>
</html>