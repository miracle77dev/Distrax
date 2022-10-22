<?php 
require 'models/db.php';
require 'class/produit.php';
$Produit = new Produit($Connexion);
if (isset($_POST['AddBtn'])) {
	if (!empty($_POST['NomProduit'])) {
		$NomProduit = utf8_encode(htmlspecialchars($_POST['NomProduit']));
		$Description = utf8_encode(htmlspecialchars($_POST['Description']));
		$Data = [$NomProduit,$Description];
		if ($Produit->AddCategorie($Data) == 1) {
			$Success = 1;
		}
		else{
			$Erreur = 2;
		}
	}
	$Erreur = 1;
}
require 'vues/categorie.php';