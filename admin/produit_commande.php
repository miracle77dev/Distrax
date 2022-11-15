<?php 
session_start();
require 'models/db.php';
require 'function/function.php';
if (isset($_SESSION['IdMarchand']) && !empty($_GET['id'])) {
	$Id = htmlspecialchars($_GET['id']);
	$Commande = getCommandeById($Id,$_SESSION['IdMarchand']);
}
	require 'vues/produit_commande.php';