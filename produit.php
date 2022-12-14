<?php
session_start();
require 'admin/models/db.php';
require 'admin/function/function.php';
require 'admin/class/produit.php';
if (isset($_GET['p']) && !empty($_GET['p'])) {
	$_SESSION['page'] = htmlspecialchars($_GET['p']);
	$UniqueId = htmlspecialchars($_GET['p']); 
	$Produit=getProduitByUniqueId($UniqueId);
	$Categorie = new Produit($Connexion);
	$_SESSION['IdCategorie'] = $Produit->IdCategorie;
	$_SESSION['IdProprio'] = $Produit->IdMarchand;
	$Categorie = $Categorie->getCategorieByIdCategorie($Produit->IdMarchand,$Produit->IdCategorie)->Categorie;

	if ($Produit==false) {
		header("location: erreur.php");
	}
	else{
		try {
			$Couleur = str_replace(['~', '-'],['"', ','],strtolower(getCouleurName($Produit->Id)->Couleur)); //Prend en parametre l'Id du produit
			$Couleur=getCouleur($Couleur);
		} catch (Exception $e) {
			
		}

		try {
			$Taille = explode("-", $Produit->Taille);
		} catch (Exception $e) {
			
		}
		require 'vues/single_product.php';
	}
}
else {
	header("location: erreur.php");
}

