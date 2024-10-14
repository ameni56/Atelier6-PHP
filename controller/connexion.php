<?php

require '../model/utilisateur.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    // Créer un objet Utilisateur
    $user1 = new Utilisateur($nom, $prenom, $email);

    // Afficher les informations de l'objet structurés avec var_dump()
    // var_dump($user1);

    // Afficher les informations dans un tableau
    include '../view/afficherUtilisateurTableau.php';
} else {
    echo "Not a POST request.";
}
?>
