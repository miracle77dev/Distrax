<?php
try{
$connexion=new PDO('mysql:host=localhost;dbname=keneshy','root','');
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
die('Erreur lors de la connexion avec la base de donnée: '.$e->getMessage());
}
