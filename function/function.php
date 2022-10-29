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
if (!function_exists('getProduitPrixById')) {
	function getProduitPrixById($Id){
		if (!empty($Id)) {
             GLOBAL $connexion;
             $r="SELECT PrixProduit FROM produit WHERE Id=?";
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
if (!function_exists('addCommande')) {
	function addCommande($Data){
		if (!empty($Data)) {
             GLOBAL $connexion;
             $r="INSERT INTO commande(IdMarchand,Produit,Qte,Pu,Pt,Couleur,Taille,NomClient,NumeroClient,CommuneClient,AdresseLivraison,CommandeId) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
             $req=$connexion->prepare($r);
             $req->execute($Data);
             $req->closeCursor();
             return 0;
		}
		else{
			die('Le produit recherché est introuvable: Vérifiez l\'identifiant du produit');
		}
	}
}

if (!function_exists('getProduitByIdCategorie')) {
	function getProduitByIdCategorie($IdMarchand,$IdCategorie){
		if (!empty($IdMarchand)&&!empty($IdCategorie)) {
             GLOBAL $connexion;
             $r="SELECT * FROM produit WHERE IdMarchand=? AND IdCategorie=?";
             $req=$connexion->prepare($r);
             $req->execute([$IdMarchand,$IdCategorie]);
             $donnee=$req->fetchAll(PDO::FETCH_OBJ);
             return $donnee;
		}
		else{
			die('Le produit recherché est introuvable');
		}
	}
}