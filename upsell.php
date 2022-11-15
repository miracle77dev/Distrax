<?php 
session_start();
require './models/db.php';
require './function/function.php';
if (isset($_SESSION['IdCategorie'])&&!empty($_SESSION['IdCategorie'])) {
	$UpsellProduit = getProduitByIdCategorie(htmlspecialchars($_SESSION['IdProprio']),htmlspecialchars($_SESSION["IdCategorie"]));
	require 'vues/upsell.php';
}