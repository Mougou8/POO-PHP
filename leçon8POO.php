<?php

Class OrdinateurManager{
    private _$db;  // l'objet PDO crée par le fichier dbconnect.php

    public function __construct($db){
        $this->setDb($db);

    }

    public function getList(){
        $postes = [];
        $q = $this->query('SELECT id, marque, modele
                            FROM ordinateur
                            ORDER by marque');
        while ($data = $q->fetch()){
                $postes[] = new Ordinateur ($data);

        }

        return $postes;
    }
    public function setDB(PDO $db){
          $this->_db = $db;
    }
    
}