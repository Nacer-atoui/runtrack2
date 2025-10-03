<?php 
//connexion à la base données
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    //requete pour importer les données de ma table de données
    $requete = $pdo->query("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles INNER JOIN etage ON salles.id_etage = etage.id;");

    $salles_etage = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 job13</title>
</head>
<body>
    <table border="1px solid black">
        <thead>
            <tr>

                <th>Nom de salle</th>
                <th>etage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salles_etage as $salle): ?>
            <tr>
                <td><?= htmlspecialchars($salle['nom_salle']) ?></td>
                <td><?= htmlspecialchars($salle['nom_etage']) ?></td>
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