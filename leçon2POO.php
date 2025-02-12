<?php

echo "bonjour";

//ordinateur.class.php
Class Ordinateur{
    private $_marque;

    public function __construct($marque){  
             $this->_marque = $marque;
    }
    public function getMarque(){
             return $this->_marque;               
    }
}

$poste = new Ordinateur("Samsung");
echo $poste->getMarque(); // affichera "Samsung"                               