<?php
//session_start();
//require 'class/viewproduit.php';
require 'admin/models/db.php';
require 'admin/function/function.php';
$Produit=getProduitById(7);
try {
	$Couleur = str_replace(['~', '-'],['"', ','],strtolower(getCouleurName(7)->Couleur)); //Prend en parametre l'Id du produit
	$Couleur=getCouleur($Couleur);
} catch (Exception $e) {
	
}

try {
	$Taille = explode("-", $Produit->Taille);
} catch (Exception $e) {
	
}
require 'vues/single_product.php';
