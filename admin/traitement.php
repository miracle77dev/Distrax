<?php 
require 'models/db.php';
require 'function/function.php';
require 'class/produit.php';
$Produit = new Produit($Connexion);

if (isset($_POST['addBtn'])) {
	$Data = checkInput($_POST);
	$Error = [];
	if(count($Data[0]) == 0){
		if (!isset($Data[1]['GrandeDescription'])) {
		 	$Data[1]['GrandeDescription'] = NULL;
		 } 
		if (!isset($Data[1]['NouveauProduit'])) {
		 	$Data[1]['NouveauProduit'] = 0;
		 } 
		if (!isset($Data[1]['CouleursProduit'])) {
		 	$Data[1]['CouleursProduit'] = NULL;
		 } 
		if (!isset($Data[1]['TaillesProduit'])) {
		 	$Data[1]['TaillesProduit'] = NULL;
		 } 
		if (!isset($Data[1]['TagProduit'])) {
		 	$Data[1]['TagProduit'] = NULL;
		 } 
		if (!isset($Data[1]['ActiverPromotion'])) {
		 	$Data[1]['ActiverPromotion'] = 0;
		 } 
		if (!isset($Data[1]['ReductionValeur'])) {
		 	$Data[1]['ReductionValeur'] = 0;
		 } 
		if (!isset($Data[1]['ReductionDelai'])) {
		 	$Data[1]['ReductionDelai'] = NULL;
		 } 
		if (!isset($Data[1]['Emplacement'])) {
		 	$Data[1]['Emplacement'] = NULL;
		 }
		 /*++++++++++++++++++++++++++++++++++++++++++*/
		$NomFichier = Upload();
		if($NomFichier==1 || $NomFichier==2){
			$Data[0][] = "Un problème s'est produit lors du chargement de la photo principale";
		}
		elseif (count($NomFichier) > 2 ) {
		  	$Data[1]['ImagePrincipale'] = $NomFichier[0];
		  	$Data[1]['UniqueId'] = explode(".",$NomFichier[0])[0];
			move_uploaded_file($NomFichier[1],$NomFichier[2]);
		  }


		$MultipleUpload = MultipleUpload();
		if ($MultipleUpload !=0 && $MultipleUpload !=1) {
			if (count($MultipleUpload) == 1) {
				$Data[1]['DeuxiemeImage'] = $MultipleUpload[0][0];
				move_uploaded_file($MultipleUpload[0][1],$MultipleUpload[0][2]);
			}
			elseif (count($MultipleUpload) == 2) {
				$Data[1]['DeuxiemeImage'] = $MultipleUpload[0][0];
				$Data[1]['TroisiemeImage'] = $MultipleUpload[1][0];
				move_uploaded_file($MultipleUpload[0][1],$MultipleUpload[0][2]);
				move_uploaded_file($MultipleUpload[1][1],$MultipleUpload[1][2]);
				
			}
			elseif (count($MultipleUpload) == 3) {
				$Data[1]['DeuxiemeImage'] = $MultipleUpload[0][0];
				$Data[1]['TroisiemeImage'] = $MultipleUpload[1][0];
				$Data[1]['QuatriemeImage'] = $MultipleUpload[2][0];
				move_uploaded_file($MultipleUpload[0][1],$MultipleUpload[0][2]);
				move_uploaded_file($MultipleUpload[1][1],$MultipleUpload[1][2]);
				move_uploaded_file($MultipleUpload[2][1],$MultipleUpload[2][2]);
			}
		}


		if (!isset($Data[1]['DeuxiemeImage'])) {
			$Data[1]['DeuxiemeImage'] = NULL;
		}
		if (!isset($Data[1]['TroisiemeImage'])) {
			$Data[1]['TroisiemeImage'] = NULL;
		}

		if (!isset($Data[1]['QuatriemeImage'])) {
			$Data[1]['QuatriemeImage'] = NULL;
		}

	/*+++++++++++++++++++++++++++++++++++++++++++++++++++++*/	
	}
	else{
		$Data[0][] = "Vérifiez que tout les champs sont rempli et réessayez";
	}


if (isset($Data) && count($Data[0])==0) {
	$Produit ->AddProduit($Data[1]);
	$Success = 1;
	if ($Data[1]['ActiverPromotion'] == '1') {
		$DataPromo = [$Data[1]['UniqueId'],$Data[1]['ActiverPromotion'],$Data[1]['ReductionValeur'],$Data[1]['ReductionDelai']];
		try {
			$Produit ->AddToPromo($DataPromo);
		} catch (Exception $e) {
			die("Une erreur s'est produite lors de l'activation de la promotion sur le produit: ".$e->getMessage());
		}
	}
}

}



