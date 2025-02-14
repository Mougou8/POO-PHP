<?php

echo "Bonjour";

class Ordinateur{
    private$_marque;
    private$_cpuClock;

    private static$_nbPostes = 0; // Attribut static

    public function __construct($data){
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

// echo $poste;

// $poste ->setMarque('fdgdz');


// POO
// La POO c'est paradigme de programmation.
// c'est un ensemble de classes qui définissent les méthodes et les propriétés .



// classe 
// C'est un modèle pour créer des objets(ex: Maison, Voiture, Ordinateur, etc...).
// c'est un ensemble d'états et de comportements pour manipuler le futur objet




// objet 
// c'est une instance de classe. 
// Chaque objet a les mêmes propriétés et les méthodes que la classe mais avec des valeurs différentes  

// Les objets communiquent et interagissent entre eux.


// principe d'encapsulation 
// Présente toutes les informations importantes d'un objet à l'intérieur de l'objet.
// Expose que les informations nécessaires choisies pour les users.
// Les caractéristiques ou attributs ont un accès privés tandis que  
// les comportements ou les méthodes ont un accès public.


// methode to string = fonction qui permet d'afficher une chaine de caractère à l'appel de l'objet
// $this 
// C'est pour déclarer des méthodes(comportements) ou des variables(propriétes)statiques les rend accessibles sans recourir à une instance de classe ou à des objets.
