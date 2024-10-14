


<?php
// Inclusion de la classe Utilisateur
require_once '../model/utilisateur.php';

// Création d'un nouvel utilisateur
$utilisateur1 = new Utilisateur("Dupont", "Jean", "jean.dupont@example.com");

// Affichage des informations de l'utilisateur
$utilisateur1->afficherUtilisateur();
?>