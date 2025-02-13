<?php

Class Ordinateur{
    private$_marque;
    private$_cpuClock;

    ...

    public function__construct($valeurs=array()){
                 if(!empty($valeurs))
                            $this->hydrate($valeurs);
    }

    public function hydrate(array $donnees){
            foreach($donnees as $attribut=> $valeur){
                $methode = 'set'.str_replace('','',ucwords(str_replace('_','',$attribut)));
                if(is_callable(array($this, $methode))){
                              $this->$methode($valeur);
                }         

        }
    }
    ...

    public function setMarque($marque){
            $this->_marque = $marque;
    }
     
    public function setCpuClock($speed){
            $this->_cpuClock= $speed;
    }
    ...
}        
            
