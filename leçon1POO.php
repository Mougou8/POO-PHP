<?php

echo "bonjour";

Class Ordinateur{
    private $_marque;


    public function _construct($marque){ 
            $this->_marque = $marque;
    }
}

$poste = new Ordinateur("Samsung"); //crééra un objet Orrdinateur de marque Samsung