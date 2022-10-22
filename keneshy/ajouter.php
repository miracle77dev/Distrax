<?php
require 'class/panier.php';
$panier=new Panier();
$produit=$_GET['id'];
if (!empty($produit)) {
     $produit=htmlspecialchars($_GET['id']);

     $panier->ajouteProduit($produit);
header('location: index.php');
}
else{
	die('Vous ne pouvez pas ajouter de produit sans identifiant');
}
