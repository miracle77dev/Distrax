<?php 
try{
    $connexion=new PDO('mysql:host=localhost; dbname=keneshy','root','',array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e) {
    die('Une erreur s\'est produite: '.$e->getMessage());
}
