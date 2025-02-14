<?php

class Voiture{

    private $_marque;
    private $_modele ;
    private $_nbPortes ; 
    private $_vitesseActuelle;



    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle = 0){
        $this->_marque=  $marque;
        $this->_modele= $modele;
        $this->_nbPortes= $nbPortes ;
        $this->_vitesseActuelle = $vitesseActuelle;
        
    }

     // Getter pour la marque
     public function getMarque() {
        return $this->_marque;
    }
    // Setter pour la marque
    public function setMarque($marque){
        $this->_marque= $marque;
    }

     // Getter pour le modele
     public function getModele() {
        return $this->_modele;
    }
      // Setter pour le modele
    public function setModele($modele){
        $this->_modele= $modele;
    }
    // Getter pour le nbPortes
    public function getnbPortes() {
        return $this->_nbPortes;
    }
      // Setter pour le nbPorte
    public function setnbPortes($nbPortes){
        $this->_nbPortes= $nbPortes;
    }
    // Getter pour la vitesseActuelle
    public function getVitesseActuelle() {
        return $this->_vitesseActuelle;
    }
          // Setter pour la vitesseActuelle
    public function setVitesseActuelle($vitesseActuelle) {
        $this->vitesseActuelle = $vitesseActuelle;
}

    public function __toString(){
        return "Voiture: {$this->_marque} {$this->_modele} {$this->_nbPortes} {$this->_vitesseActuelle} ";
    }
    // public function setVitesseActuelle($vitesse) {
    //         $this->vitesseActuelle = $vitesse; // Initialiser la vitesse à 0
    //     }
    
    // public function demarrer() {
    //     echo "La voiture " . $this->marque . " démarre.\n";
    // 
    
    // public function accelerer($increment) {
    //         $this->vitesseActuelle += $increment;
    //    echo "La voiture " . $this->marque . " accélère à " . $this->vitesse . " km/h.\n";
    //    }
    // //     }

    // public function stopper($vitesse) {
    //         $this->vitesseActuelle -= $vitesse;
    //         if ($this->vitesseActuelle < 0) {
    //             $this->vitesseActuelle = 0; // La vitesse ne peut pas être négative
    //         }
    // }  
        
    //     public static function combien (){ // méthode statique
    //         echo self::$_nbVehicules."<br>";
        }
    // }       

    // $voiture = new Voiture();
    // $voiture->demarrer();
    // echo "vitesse actuelle : " . $voiture->getVitesseActuelle() ." km/h\n"; // Affichage 0 km/h
    // $voiture->accelerer(50);
    // echo "Vitesse actuelle : " . $voiture->getVitesseActuelle() . " km/h\n"; // Affiche 50 km/h
    // $voiture->stopper(0);
    // echo "Vitesse actuelle : " . $voiture->getVitesseActuelle() . " km/h\n"; // Affiche 0 km/h

    
    // Voiture::combien(); // affiche 0
    $vehicle1 = new Voiture("Peugeot", "408", 5);
    $vehicle2 = new Voiture("Citroên", "C4", 3);
    // Voiture::combien(); // affiche 2

    echo $vehicle1->getMarque();
// $vehicle1->setMarque("vgfdbgfhg");
//     echo $vehicle1->getMarque();


   echo $vehicle1->getModele();
// $vehicle1->setModele("mgmhjjj");
//    echo $vehicle1->getModele();

    echo $vehicle1->getnbPortes();

   echo $vehicle1->getVitesseActuelle();
// $vehicle1->setVitesseActuelle(50);
//    echo $vehicle1->getVitesseActuelle();


// ajouter une methode to string 
echo $vehicle1;