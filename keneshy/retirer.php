<?php
require 'class/panier.php';
$panier=new Panier();
$produit=htmlspecialchars($_GET['id']);
$panier->retirerProduit($produit);
header('location: panier.php');

