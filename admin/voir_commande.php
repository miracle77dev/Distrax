<?php 
session_start();
require 'models/db.php';
require 'function/function.php';

if (!empty($_SESSION['IdMarchand'])) {
	//Recupère commandes non traitées
	$Produit = getCommandeNonTraiteDetail(htmlspecialchars($_SESSION['IdMarchand']));
	require 'vues/voir_commande.php';
}
else{
	header('location: ../iland/');
}
