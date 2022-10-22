<?php

if (!function_exists('produitPanier')) {
	function produitPanier($items){
		if (!empty($items)) {
             GLOBAL $connexion;
             $r='SELECT * FROM produit WHERE id IN('.$items.')';
             $req=$connexion->prepare($r);
             $req->execute();
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

if (!function_exists('plusVendu')) {
	function plusVendu($items){
		if (!empty($items)) {
             GLOBAL $connexion;
             $r="SELECT * FROM produit WHERE categorie='$items'";
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

