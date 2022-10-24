<?php 
require 'models/db.php';
require 'class/produit.php';
$Produit = new Produit($Connexion);
$Produit = $Produit->getProduit();
require 'vues/voir_produit.php';