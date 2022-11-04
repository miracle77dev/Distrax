<?php 
session_start();
require './models/db.php';
require './function/function.php';
if (isset($_GET)) {
	extract($_GET);
	$Info=InfoProduit(htmlentities($_GET['id']));
	//
	$_SESSION['IdCategorie'] = $Info->IdCategorie;
	$_SESSION['IdMarchand'] = $Info->IdMarchand;
	$Data = [
		$Info->IdMarchand,
		$Info->ImagePrincipale,
		$Info->NomProduit,
		htmlspecialchars(intval($q)),
		intval($Info->PrixProduit),
		htmlspecialchars($q)*$Info->PrixProduit,
		htmlspecialchars($c),
		htmlspecialchars($t),
		htmlspecialchars($n),
		htmlspecialchars($num),
		htmlspecialchars($com),
		htmlspecialchars($l),
		substr(str_shuffle(time().rand(100000, 900000)),0,6)
	];
	if (addCommande($Data) == 0) {
		header("location: ./upsell.php");
	}
	else{
		echo "Un problème s'est produit lors de l'ajout de la commande";
	}

}