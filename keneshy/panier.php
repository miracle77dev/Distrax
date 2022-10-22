<?php
session_start();
require 'admin/modele/systeme_db.php';
require 'function/function.php';
require 'class/viewproduit.php';
$produit=new viewProduit($connexion);
require 'vues/shopping_cart.php';
