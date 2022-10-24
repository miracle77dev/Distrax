<?php
require 'admin/models/db.php';
require 'admin/function/function.php';
require 'admin/class/produit.php';
$Produit = new Produit($Connexion);
$Produit = $Produit->getProduitById(3);
require 'vues/product.php';
