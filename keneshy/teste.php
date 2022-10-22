<?php
require 'class/panier.php';
require 'admin/modele/systeme_db.php';

$produit=new Panier();
#$p=$produit->ajouteProduit();
/*var_dump($_SESSION['panier']);
$s=implode('/', $_SESSION['panier']);
echo array_sum($_SESSION['panier']);*/


             $r='SELECT * FROM produit WHERE categorie=\'smartphone\'';
             $req=$connexion->prepare($r);
             $req->execute();
             $donnee=$req->fetchAll(PDO::FETCH_OBJ);
             return var_dump($donnee);
             