<?php 
//connexion à la base données
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    //requete pour importer les données de ma table de données
    $requete = $pdo->query("SELECT SUM(superficie) AS superficie_totale
FROM etage;");

    $etages = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 job07</title>
</head>
<body>
    <table border="1px solid black">
        <thead>
            <tr>

                <th>Superficie totale des étages</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etages as $etage): ?>
            <tr>
                <td><?= htmlspecialchars($etage['superficie_totale']) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <style>
        table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    border: 1px solid #333;
    padding: 8px;
    text-align: left;
}

thead {
    background-color: #a6c1efff;
    
}
    </style>
</body>
</html>