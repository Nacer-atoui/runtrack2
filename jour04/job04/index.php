

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="Nom">Nom</label>
        <input type="text" name="Nom" id="name">
        <label for="Prénom">Prénom</label>
        <input type="text" name="Prénom" id="name2">
        <button type="submit">Envoyer</button>
    </form>

    <table border="1">
        <thead>
            <th>Argument</th>
            <th>Valeur</th>
        </thead>
        <tbody>
            <?php foreach($_GET as $key => $value): ?> 
             <tr>
                <td><?php echo $key ?> </td>
                <td> <?php echo $value; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>