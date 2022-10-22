	<?php

	//Sécurité au niveau des variables
	if (!function_exists('cadenas')) {
		function cadenas( $para){
			htmlspecialchars(htmlentities(strip_tags(trim($para))));
			if (mb_strlen($para)!='') {
				return $para;
			}
			else{
				return false;
			}
		}
	}

		//Sécurité au niveau des variables
	if (!function_exists('e')){
		function e($para){
			if (isset($para)) {
				return $para;
			}
			elseif (!isset($para)) {
				echo 'On avance...';
			}
		}
	}


	//Recuperer la sous categorie approprier en fonction du choix
	if (!function_exists('sc')) {
		function sc(){

	if (!empty($_POST['sous_categorie1']))
			{
				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
			 	$nouveau=cadenas($nouveau);	
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie1=cadenas($sous_categorie1);
				$titre=cadenas($titre);
				$prix=cadenas((int)$prix);
				$reduction=cadenas((int)$reduction);
				return $donnee=[
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie1,
					'titre'=>$titre,
					'nouveau'=>$nouveau,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie2']))
			{

               
				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie2=cadenas($sous_categorie2);
				$titre=cadenas($titre);
				$prix=cadenas((int)$prix);
				$reduction=cadenas((int)$reduction);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie2,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie3']))
			{
				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$reduction=cadenas((int)$reduction);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie3=cadenas($sous_categorie3);
				$titre=cadenas($titre);
				$prix=cadenas((int)$prix);
				return $donnee=[
					'nouveau'=>$nouveau,
					'categorie'=>$categorie,
					'etoile'=>$etoile,
					'descrip'=>$descrip,
					'sous_categorie'=>$sous_categorie3,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie4']))
			{

				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie4=cadenas($sous_categorie4);
				$titre=cadenas($titre);
				$prix=cadenas((int)$prix);
				$reduction=cadenas((int)$reduction);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie4,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie5']))
			{

				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie5=cadenas($sous_categorie5);
				$titre=cadenas($titre);
				$prix=cadenas((int)$prix);
				$reduction=cadenas((int)$reduction);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie5,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie6']))
			{

				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie6=cadenas($sous_categorie6);
				$titre=cadenas($titre);
				$reduction=cadenas($reduction);
				$prix=cadenas((int)$prix);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie6,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie7']))
			{

				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie7=cadenas($sous_categorie7);
				$titre=cadenas($titre);
				$reduction=cadenas($reduction);
				$prix=cadenas((int)$prix);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie7,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie8']))
			{

				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie8=cadenas($sous_categorie8);
				$titre=cadenas($titre);
				$reduction=cadenas($reduction);
				$prix=cadenas((int)$prix);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie8,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie9']))
			{

				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie9=cadenas($sous_categorie9);
				$titre=cadenas($titre);
				$reduction=cadenas($reduction);
				$prix=cadenas((int)$prix);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie9,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}
	elseif (!empty($_POST['sous_categorie10']))
			{

				extract($_POST);
				if (!isset($nouveau)) {
			 			$nouveau=NULL;
			 		}
				$donnee=[];
				$nouveau=cadenas($nouveau);
				$reduction=cadenas($reduction);
				$etoile=cadenas($etoile);
				$categorie=cadenas($categorie);
				$descrip=cadenas($descrip);
				$sous_categorie10=cadenas($sous_categorie10);
				$titre=cadenas($titre);
				$prix=cadenas((int)$prix);
				$reduction=cadenas($reduction);
				return $donnee=[
					'nouveau'=>$nouveau,
					'descrip'=>$descrip,
					'etoile'=>$etoile,
					'categorie'=>$categorie,
					'sous_categorie'=>$sous_categorie10,
					'titre'=>$titre,
					 'prix'=>$prix, 'reduction'=>$reduction
				];

			}

	else{
			die('Veuillez choisir une categorie et une sous categorie');
		}
		}
	}

	//Upload

	if (!function_exists('upload')) {
		function upload(){
			if (isset($_FILES['image'])){
				$count=count($_FILES['image']['name']);
				if ($count>3) {
					die('Vous ne pouvez pas charger plus de 3 images');
				}
				else{

					$_SESSION['uploadImg']=[];
					for ($i=0; $i < $count; $i++) {
						$imgNom=$_FILES['image']['name'][$i];
						$imgSize=$_FILES['image']['size'][$i];
						$extension=pathinfo($imgNom,PATHINFO_EXTENSION);
						$uploadNom=hash('sha256', (microtime().$imgNom)).'.'.$extension;
						$imgPath='upload/'.$uploadNom;
						$extentionAutorise=['jpg','jpeg','png','gif'];
						$extentionAutorise=array_map('strtoupper', $extentionAutorise);
						$tmp=$_FILES['image']['tmp_name'][$i];
						if (in_array(strtoupper($extension),$extentionAutorise)) {
							if ($imgSize>4000000) {
								die('Veuillez choisie une images de moins de 4Mo');
							}
							else{
								move_uploaded_file($tmp,$imgPath);
								$_SESSION['uploadImg'][]=$uploadNom;

							}
						}
					}
				}

			}
			else{
				die('Veuillez charger au moins une image de votre produit');
			}
		}
	}