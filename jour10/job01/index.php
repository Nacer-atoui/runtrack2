<?php 
//connexion à la base données
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    //requete pour importer les données de ma table de données
    $requete = $pdo->query("SELECT prenom, nom, naissance, sexe, email FROM etudiants");

    $etudiants = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid black">
        <thead>
            <tr>

                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= htmlspecialchars($etudiant['prenom']) ?></td>
                <td><?= htmlspecialchars($etudiant['nom']) ?></td>
                <td><?= htmlspecialchars($etudiant['naissance']) ?></td>
                <td><?= htmlspecialchars($etudiant['sexe']) ?></td>
                <td><?= htmlspecialchars($etudiant['email']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</body>
</html>