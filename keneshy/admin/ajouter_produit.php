			 <?php
			 session_start();
			 require 'vues/ajouter_produit.php';
			 require 'modele/systeme_db.php';
			 require 'autoload/autoload.php';
			 require 'function/function.php';

			 $addProduit=new Produit($connexion);

			 if (isset($_POST['valider'])) {
			 	if (isset($_POST['choix']) ) {
			 		$sc_info=sc();
			 		$sc_info['choix']=$_POST['choix'];
			 		//die(var_dump($sc_info));
			     //Upload
			 		upload();
			    //Parametre d'upload
			 		if (isset($_SESSION['uploadImg'][0])&&isset($_SESSION['uploadImg'][1])&&isset($_SESSION['uploadImg'][2])) {
			 			$img1=$_SESSION['uploadImg'][0];
			 			$img2=$_SESSION['uploadImg'][1];
			 			$img3=$_SESSION['uploadImg'][2];
			 			$infoProduit=[
			 				$sc_info,
			 				'img'=>$img1,
			 				'img2'=>$img2,
			 				'img3'=>$img3
			 			];
			 		}
			 		else if (isset($_SESSION['uploadImg'][0])&&isset($_SESSION['uploadImg'][1])) {
			 			$img1=$_SESSION['uploadImg'][0];
			 			$img2=$_SESSION['uploadImg'][1];
			 			$img3='';
			 			$infoProduit=
			 			[
			 				$sc_info,
			 				'img'=>$img1,
			 				'img2'=>$img2,
			 				'img3'=>$img3
			 			];
			 		}
			 		else if (isset($_SESSION['uploadImg'][0])) {

			 			$img1=$_SESSION['uploadImg'][0];
			 			$img2='';
			 			$img3='';
			 			$infoProduit=[
			 				$sc_info,
			 				'img'=>$img1,
			 				'img2'=>$img2,
			 				'img3'=>$img3
			 			];
			 		}
			 		else{

			 			die('Veuillez charger au moins une image, puis réessayer...');
			 		}
			 	//action
			 		$donnee=$addProduit->addProduit($infoProduit);
			 		$_SESSION['info']['texte']='';

			 	}

		else{
			 		$sc_info=sc();
			 		$sc_info['choix']='';
			     //Upload
			 		upload();
			    //Parametre d'upload
			 		if (isset($_SESSION['uploadImg'][0])&&isset($_SESSION['uploadImg'][1])&&isset($_SESSION['uploadImg'][2])) {
			 			$img1=$_SESSION['uploadImg'][0];
			 			$img2=$_SESSION['uploadImg'][1];
			 			$img3=$_SESSION['uploadImg'][2];
			 			$infoProduit=[
			 				$sc_info,
			 				'img'=>$img1,
			 				'img2'=>$img2,
			 				'img3'=>$img3
			 			];
			 		}
			 		else if (isset($_SESSION['uploadImg'][0])&&isset($_SESSION['uploadImg'][1])) {
			 			$img1=$_SESSION['uploadImg'][0];
			 			$img2=$_SESSION['uploadImg'][1];
			 			$img3='';
			 			$infoProduit=
			 			[$sc_info,
			 				'img'=>$img1,
			 				'img2'=>$img2,
			 				'img3'=>$img3
			 			];
			 		}
			 		else if (isset($_SESSION['uploadImg'][0])) {

			 			$img1=$_SESSION['uploadImg'][0];
			 			$img2='';
			 			$img3='';
			 			$infoProduit=[
			 				$sc_info,
			 				'img'=>$img1,
			 				'img2'=>$img2,
			 				'img3'=>$img3
			 			];
			 		}
			 		else{

			 			die('Veuillez charger au moins une image, puis réessayer...');
			 		}
			 	//action
			 		$donnee=$addProduit->addProduit($infoProduit);
			 		$_SESSION['info']['texte']='';
			 }

			 	

			 }

