<?php
class Utilisateur {
    private $nom;
    private $prenom;
    private $email;

    // Constructeur paramétré
    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Méthode pour afficher les informations de l'utilisateur
    public function afficherUtilisateur() {
        echo "Nom: " . $this->nom . "<br>";
        echo "Prénom: " . $this->prenom . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
?>
