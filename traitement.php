<?php 
require './models/db.php';
require './function/function.php';
if (isset($_GET)) {
	extract($_GET);
	$Info=InfoProduit(htmlentities($_GET['id']));
	//
	$IdMarchand = 1;
	$Data = [
		$IdMarchand,
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
	var_dump($Data);

}