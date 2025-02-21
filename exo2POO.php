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
        return "Marque : $this->marque, Modèle : $this->modele";
    }
}
// classe de dérive VoitureElec= héritage
class VoitureElect extends Voiture {
    private $_autonomie;

    public function __construct($marque, $modele, $autonomie){
        //Ajout du parent= pour éviter la répétition de code
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
}
    public function getInfos(){
      return parent::getInfos() . ", Autonomie : $this->_autonomie km";
    }
}
// Instanciation des objets
$v1 = new Voiture("Peugeot","408");
$ve2 = new voitureElect("BMW", "i3", 100);
$v3 = new Voiture("Citroên","C4");
$ve4 = new voitureElect("Toyota", "i3", 150);

// Affichage des informations
echo $v1->getInfos() ."<br>";
echo $ve2->getInfos() ."<br>";
echo $v3->getInfos() ."<br>";
echo $ve4->getInfos() ."<br>";
// Héritage: définit des rélations hiérarchiques entre les classes ,
// de sorte que les attributs et méthodes communs peuvent être réutilisés.
//En définissant des attributs et des comportements de base dane classe principale
//et ajoute des attributs et des comportements suplémentaires . 


