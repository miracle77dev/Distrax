<?php 
session_start();
require './models/db.php';
require './function/function.php';
if (isset($_SESSION['IdCategorie'])&&!empty($_SESSION['IdCategorie'])) {
	$IdMarchand = 1;
	$UpsellProduit = getProduitByIdCategorie(htmlspecialchars($IdMarchand),htmlspecialchars($_SESSION["IdCategorie"]));
	var_dump($UpsellProduit);
	require 'vues/upsell.php';
}