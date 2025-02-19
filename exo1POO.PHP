<?php

class Voiture{

    private $_marque;
    private $_modele ;
    private $_nbPortes ; 
    private $_vitesseActuelle;
    private $_statut;
    private $_vitesseAcceleration; 
    private $_arret;

    
    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle = 0,
                             $statut = 0, $vitesseAcceleration = 0, $arret = 0){
        $this->_marque=  $marque;
        $this->_modele= $modele;
        $this->_nbPortes= $nbPortes ;
        $this->_vitesseActuelle = $vitesseActuelle;
        $this->_statut = $statut;
        $this->_vitesseAcceleration = $vitesseAcceleration;
        $this->_arret = $arret;
        
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
    
         // Getter pour le statut
    public function getStatut() {
        return $this->_statut;
    }
      // Setter pour le statut
    public function setStatut($statut) {
         $this->statut = $statut;
}

     // Getter pour la vitesseAccelerer 
     public function getVitesseAcceleration() {
        return $this->_vitesseAcceleration;
    }
      // Setter pour la vitesseAccelerer
    public function setVitesseAcceleration($vitesseAcceleration) {
         $this->_vitesseAcceleration = $vitesseAcceleration;
}

 // Getter pour l'arrêt
 public function getArret() {
    return $this->_arret;
}
  // Setter pour l'arrêt
public function setArret($arret) {
     $this->_arret = $arret;
}

    public function __toString(){
        return "Voiture: {$this->_marque} {$this->_modele}  {$this->_nbPortes}
          {$this->_vitesseActuelle}  {$this->_statut}  {$this->_vitesseAcceleration}  {$this->_arret}";
    }
    // public function setVitesseActuelle($vitesse) {
    //         $this->vitesseActuelle = $vitesse; // Initialiser la vitesse à 0
    //     }
    
    public function demarrer() {
        // si la voiture n'est pas démarrée
         // alors je peux la démarrer
        // donc on met le statut à 1
       if ($this->_statut == 0) {
        $this->_statut = 1;
           echo "la voiture a démarré.\n";
          // si la voiture est déjà démarré 
        // afficher "la voiturte est déjà démarrée 
       }else  {
           echo "La voiture est déjà démarrée.\n";
       }
    }
    public function accelerer($vitesseAcceleration = 0 ){
               $this->_vitesseActuelle += $vitesseAcceleration;
               if ($vitesseAcceleration > 0){
               echo "La voiture accélère de " . $vitesseAccelerration . " km/h. VitesseActuelle : " . $this->vitesseActuelle . " km/h.<br>"; 

    } else {
            echo " la vitesse Acceleration doit être positive.<br>";
    }

        }
            public function stopper() {
                if ($this->_statut) {
                    $this->_statut= true;
                    echo "Le véhicule est arrêté.<br>";
                }             
        }   

        // public static function combien (){ // méthode statique
        //             echo self::$_nbVehicles."<br>";


        // }

        // echo "La voiture " . $this->marque . " démarre.\n";
            // public function accelerer($increment) {
    //         $this->vitesseActuelle += $increment;
    //    echo "La voiture " . $this->marque . " accélère à " . $this->vitesse . " km/h.\n";
    //    }
    //     }

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
    // $voiture->demarrer(0);
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
    echo $vehicle1->getModele();
    echo $vehicle1->getnbPortes();
    echo $vehicle1->getVitesseActuelle();
    echo $vehicle1->getStatut();
    echo $vehicle1->getVitesseAcceleration();
    echo $vehicle1->getArret();

    echo $vehicle2->getMarque();
    echo $vehicle2->getModele();
    echo $vehicle2->getnbPortes();
    echo $vehicle2->getVitesseActuelle();
    echo $vehicle2->getStatut();
    echo $vehicle2->getVitesseAcceleration();
    echo $vehicle2->getArret();
    
 

// $vehicle1->setMarque("vgfdbgfhg");
//     echo $vehicle1->getMarque();
  // $vehicle1->setModele("mgmhjjj");
//    echo $vehicle1->getModele();
    // $vehicle1->setVitesseActuelle(50);
//    echo $vehicle1->getVitesseActuelle();
  

// ajouter une methode to string 
// $vehicle1->stopper(0);

// var_dump($vehicle1);