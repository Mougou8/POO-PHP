<?php

require_once("lib/dbconnect.php"); // le fichier de connexion à la BDD
require_once("ordinateur.class.php"); // la classe ordinateur
require_once("ordinateurManager.class.php");// le manager

$manager = new OrdinateurManager($db);
$postes = $manager->getList();


var_dump($postes);
