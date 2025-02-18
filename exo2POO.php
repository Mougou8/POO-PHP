<?php

// classe de base voiture
class Voiture {
    protected $marque;
    protected $modele;

    public function __construct($marque, $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getInfos() {
        return "Marque : $this->_marque, Modèle : $this->_modele";
    }
}
// classe de dérive VoitureElec= hérite 
class VoitureElect extends Voiture {
    private $autonomie;

    public function __construct($marque, $modele, $autonomie){
        //Ajout du parent= pour éviter la répétition de code
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
}
    public function getInfos(){
      return parent::getInfos() . ", Autonomie : $this->_autonomie km";
    }
}
// Instanciation des objets
$v1 = new Voiture("Peugeot""408");
$ve2 = new voitureElect("BMW", "i3", 100);

// Affichage des informations
echo $v1->getInfos() ."<br>";
echo $ve2->getInfos() ."<br>";






