<?php

echo "Bonjour";

class Ordinateur{
    private$_marque;
    private$_cpuClock;

    private static$_nbPostes = 0; // Attribut static

    public function__construct($data){
        $this->_marque= $data[0];
        $this->_cpuClock= $data[1];
        self::$nb_postes++; // le compteur est incrémenté
    }

    public function setMarque($marque){
        $this->_marque= $marque;
    }

    public function setCpuClock($speed){
    $this->_cpuClock= $speed;
    }

    public static function combien (){ // méthode statique
        echo self::$_nbpostes."<br>";
    }

}

Ordinateur::combien(); // affiche 0
$poste = new Ordinateur(array("Samsung", 2.4));
$poste2 = new Ordinateur(array("Hitachi", 1.6));
Ordinateur::combien(); // affiche 2