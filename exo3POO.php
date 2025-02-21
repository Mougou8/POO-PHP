<?php
class Personne {

private  $_nom;
private  $_prenom;
private  $_dateNaissance;

public function __construct($nom, $prenom, $dateNaissance) {
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    // le constructeur initialise la date de naissance  en utilisant la classe DateTime
    $this->_dateNaissance = new DateTime($dateNaissance);
}

// Méthode getAge: calcule l'âge en utilisant la méthode diff de la classe DateTime
public function getAge(){  
    $aujourdhui = new DateTime();
    $age = $aujourdhui->diff($this->_dateNaissance);
    return $age->y; // l' attribut y =>retourne l'âge en années
}
// Méthode pour afficher les informations
public function afficherInfos() {
    echo"{$this->_prenom} {$this->_nom} a " . $this-> getAge() . " ans.<br>"; 
    }
}
// Instanciation des objets
$sp1 = new Personne ("DUPONT", "Michel", "1980-02-19");
$sp2 = new Personne ("DUCHEMIN", "Alice", "1985-01-17");
$sp3 = new Personne ("DUPOND", "Gérard", "1983-03-18");
$sp4 = new personne ("MULLER", "Mathilde", "1987-04-20");

// Affichage
$sp1->afficherInfos();
$sp2->afficherInfos();
$sp3 ->afficherInfos();
$sp4 ->afficherInfos();

 

