<?php
//ordinateur.class.php
Class Ordinateur{
    private $_marque;
    private $_modele;
    private $_ecran;
    private $_statut = 0;
//     // private $_cpuClock;

    public function allumer(){
                 $this->_statut =1;
    }
}
    $poste = new Ordinateur();
    $poste->allumer();    



//     public function_construct($marque){  //, $cpuClock
//             $this->_marque = $marque;
//     //         $this->_cpuClock = $cpuClock;
//     }
// }

echo "Bonjour";
//     public function getMarque(){
//             return $this->_marque;
//     }

//     public function getCpuClock(){
//             return $this->_cpuClock;
//     }

//     public function setCpuClock($speed){
//             $this->_$speed;
//     }
// }
// // l'objet est instancié avec un processer de 2.4 GHz
// $poste = new Ordinateur("Samsung"); //crééra un objet Orrdinateur de marque Samsung
// $poste->setCpuClock(3);
// echo $poste->getCpuClock()." GHz";  //affichera "samsung"