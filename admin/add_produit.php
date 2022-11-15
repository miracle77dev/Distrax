<?php 
if(session_id() == '' || session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['IdMarchand'])&&!empty($_SESSION['IdMarchand'])) {
	require 'traitement.php';
	$Categorie = getCategorieByIdMarchand(htmlspecialchars($_SESSION['IdMarchand']));
	require "vues/add_produit.php";
}