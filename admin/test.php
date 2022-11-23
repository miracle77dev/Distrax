<?php 
session_start();
require 'models/db.php';
require 'function/function.php';
$Produit = getCommandeNonTraiteDetail("201606");

var_dump($Produit);