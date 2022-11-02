<?php 
session_start();
require 'models/db.php';
require 'class/produit.php';
require 'class/marchand.php';
require 'function/function.php';
$Produit = new Produit($Connexion);
$Marchand = new Marchand($Connexion);
if (isset($_SESSION['IdMarchand'])&&!empty($_SESSION['IdMarchand'])) {
$Produit = $Produit->getProduit(htmlspecialchars($_SESSION['IdMarchand']));
	$Categorie = getCategorieByIdMarchand(htmlspecialchars($_SESSION['IdMarchand']));
	$Marchand = $Marchand->getMarchandByIdMarchand(htmlspecialchars($_SESSION['IdMarchand']));
	require 'vues/voir_produit.php';
}
else{
	header('location: ../iland/');
}