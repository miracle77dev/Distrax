<?php

if (!function_exists('produitPanier')) {
	function produitPanier($items){
		if (!empty($items)) {
             GLOBAL $connexion;
             $r='SELECT * FROM produit WHERE id =?';
             $req=$connexion->prepare($r);
             $req->execute([$items]);
             $donnee=$req->fetchAll(PDO::FETCH_OBJ);
             return $donnee;
		}
		else{
			die('Veuillez rentrer un paramettre valide');
		}
	}
}

if (!function_exists('similaire')) {
	function similaire($items){
		if (!empty($items)) {
             GLOBAL $connexion;
             $r="SELECT * FROM produit WHERE sous_categorie='$items'";
             $req=$connexion->prepare($r);
             $req->execute();
             $donnee=$req->fetchall(PDO::FETCH_OBJ);
             return $donnee;
		}
		else{
			die('Veuillez rentrer un paramettre valide');
		}
	}
}
if (!function_exists('ProduitSimilaireParCategorie')) {
	function ProduitSimilaireParCategorie($items){
		if (!empty($items)) {
             GLOBAL $connexion;
             $r="SELECT * FROM produit WHERE IdCategorie=$items";
             $req=$connexion->prepare($r);
             $req->execute();
             $donnee=$req->fetchall(PDO::FETCH_OBJ);
             return $donnee;
		}
		else{
			die('Veuillez rentrer un paramettre valide');
		}
	}
}

if (!function_exists('InfoProduit')) {
	function InfoProduit($Id){
		if (!empty($Id)) {
             GLOBAL $connexion;
             $r="SELECT NomProduit,PrixProduit,ImagePrincipale FROM produit WHERE Id=?";
             $req=$connexion->prepare($r);
             $req->execute([$Id]);
             $donnee=$req->fetch(PDO::FETCH_OBJ);
             return $donnee;
		}
		else{
			die('Le produit recherché est introuvable: Vérifiez l\'identifiant du produit');
		}
	}
}

