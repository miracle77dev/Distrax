<?php 
session_start();
require './models/db.php';
require './function/function.php';
if (!empty($_GET['id'])&&isset($_GET['q'])&&isset($_GET['c'])&&isset($_GET['t'])) {
	extract($_GET);
	$Produit=InfoProduit(htmlentities($id));
	require 'vues/shopping_cart.php';
}
else{
	header('location: ./produit.php?p='.$_SESSION['page']);
}