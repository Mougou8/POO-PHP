<?php
class Personne {

private  $_nom;
private  $_prenom;
private  $_dateNaissance;

public function __construct($nom, $prenom, $dateNaissance) {
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_dateNaissance = new DateTime($dateNaissance);
}

//Méthode pour calculer l'âge
public function getAge(){ //
    $aujourdhui = new DateTime();
    $age = $aujourdhui->diff($this->dateNaissance);
    return $age->y;// retourne l'âge en années
}
// Méthode pour afficherles informations
public function afficherInfos() {
    echo"{$this->prenom} {$this->nom} a " . $this-> getAge() . " ans.<br>";
    }
}
// Instanciation des objets
$sp1 = new Personne ("DUPONT", "Michel", "1980-02-19");
$sp2 = new Personne ("DUCHEMIN", "Alice", "1985-01-17");

// Affichage
$sp1->afficherInfos();
$sp2->afficherInfos();

 

// // public function afficherInfos() {
// //     echo "Nom: " . $this->nom . "\n";
// //     echo "Prénom" . $this->prenom . "\n";
// //     echo "DateNaissance" . $this->

