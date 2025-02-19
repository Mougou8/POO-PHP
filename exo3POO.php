<?php

echo "bonjour";

class Personne {}

private string $_nom;
private string $_prenom;
private int    $_date;

public function __construct($nom, $prenom, $age) {
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_date = $date;
}

   // Méthodes pour obtenir les valeurs des propriétés
public function getNom(){
     return $this->_nom;
}

public function getPrenom(){
    return$this->_prenom;
}

public function getDate(){
    return $this->_date;
}

  // Méthodes pour définir les valeurs des propriétés
public function setNom($nom) {
    $this->nom = $nom;
}

public function setNom($prenom) {
    $this->prenom = $prenom;
}

public function setNom($date) {
    $this->date = $date;
}

public function afficherInfos() {
    echo "Nom: " . $this->nom . "\n";
    echo "Prénom" . $this->prenom . "\n";
    echo "DateNaissance" . $this->