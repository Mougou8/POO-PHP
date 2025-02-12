<?php

echo "bonjour";

//ordinateur.class.php
Class Ordinateur{
    private $_marque;
    private $_cpuClock;

    
    public function __construct($marque,$cpuClock){  
            $this->_marque = $marque;
            $this->_cpuClock = $cpuClock;
    }


    public function getMarque(){
            return $this->_marque;
    }

    public function getCpuClock(){
            return $this->_cpuClock;
    }

    public function setCpuClock($speed){
            $this->_$speed;
    }
}
// l'objet est instancié avec un processer de 2.4 GHz
$poste = new Ordinateur("Samsung", 2.4); 
$poste->setCpuClock(3);
echo $poste->getCpuClock()." GHz";  //affichera "3GHz"
