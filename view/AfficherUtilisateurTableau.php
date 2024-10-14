<!-- view/afficherUtilisateurTableau.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'Utilisateur</title>
    <link rel='stylesheet' href='../style.css'>
</head>
<body>
  
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
        <tr>
            <td><?php echo $user1->getNom(); ?></td>
            <td><?php echo $user1->getPrenom(); ?></td>
            <td><?php echo $user1->getEmail(); ?></td>
        </tr>
    </table>
    <a href="../form.html">Retour au formulaire</a>
</body>
</html>
