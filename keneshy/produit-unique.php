<?php
session_start();
require 'class/viewproduit.php';
require 'admin/modele/systeme_db.php';
require 'function/function.php';
$produit=produitPanier($_GET['id']);
require 'vues/single_product.php';
