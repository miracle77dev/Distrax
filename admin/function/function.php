<?php 

if (!function_exists('checkInput')) {
    function checkInput($data){
       $Errors = [];
       $Data = [];
       $All = [];

       foreach ($data as $key => $value) {
         if ($key=='addBtn') {
            continue;
          }
          elseif ($key == 'CouleursProduit' && $value == '' || $key == 'TaillesProduit' && $value =='' || $value == "on" || $key == "ReductionValeur" && $value =='' || $key == "ReductionDelai" && $value==false || $key == "TagProduit" && $value == '' || $key == "GrandeDescription" && $value == '' || $value == "Choisir l'emplacement sur la plateforme") {
          	 continue;
          }
         elseif (empty($value) || trim($value) == "" || $key == "Categorie" && $value == "0") {
            $Errors[] = "Veuillez remplir les différents champs";
          }
          else{
          	$Data [$key] = htmlspecialchars($value);
          }
    	}
    return $All = [$Errors,$Data];
    }
}

if (!function_exists('ProduitSimilaireParCategorie')) {
   function ProduitSimilaireParCategorie($items){
      if (!empty($items)) {
             GLOBAL $Connexion;
             $r="SELECT * FROM produit WHERE IdCategorie=$items";
             $req=$Connexion->prepare($r);
             $req->execute();
             $donnee=$req->fetchall(PDO::FETCH_OBJ);
             return $donnee;
      }
      else{
         die('Veuillez rentrer un paramettre valide');
      }
   }
}

if (!function_exists('getCategorie')) {
   function getCategorie(){
             GLOBAL $Connexion;
             $r="SELECT Id,Categorie FROM categorie";
             $req=$Connexion->prepare($r);
             $req->execute();
             $donnee=$req->fetchall(PDO::FETCH_OBJ);
             return $donnee;
     
   }
}
if (!function_exists('getCommandeNonTraite')) {
   function getCommandeNonTraite($IdMarchand){
             GLOBAL $Connexion;
             $r="SELECT Produit,Pu,ImagePrincipale, SUM(Qte) AS Qte FROM commande WHERE IdMarchand = ? AND Statut = 0 GROUP BY Produit";
             $req=$Connexion->prepare($r);
             $req->execute([$IdMarchand]);
             $donnee=$req->fetchall(PDO::FETCH_OBJ);
             return $donnee;
     
   }
}

if (!function_exists('getCategorieByIdMarchand')) {
   function getCategorieByIdMarchand($IdMarchand){
             GLOBAL $Connexion;
             $r="SELECT Id,Categorie FROM categorie WHERE idMarchand = ?";
             $req=$Connexion->prepare($r);
             $req->execute([$IdMarchand]);
             $donnee=$req->fetchall(PDO::FETCH_OBJ);
             return $donnee;
     
   }
}

if (!function_exists('Upload')) {
   function Upload(){
      $Data = [];
      if (isset($_FILES['PhotoPrincipale'])){
         $_SESSION['uploadImg']=[];
         $imgNom=$_FILES['PhotoPrincipale']['name'];
         $imgSize=$_FILES['PhotoPrincipale']['size'];
         $extension=pathinfo($imgNom,PATHINFO_EXTENSION);
         $uploadNom=hash('sha256', (microtime().$imgNom)).'.'.$extension;
         $imgPath='upload/'.$uploadNom;
         $extentionAutorise=['jpg','jpeg','png','gif'];
         $extentionAutorise=array_map('strtoupper', $extentionAutorise);
         $tmp=$_FILES['PhotoPrincipale']['tmp_name'];
         if (in_array(strtoupper($extension),$extentionAutorise)) {
            return $Data = [$uploadNom,$tmp,$imgPath]; // Tout c'est bien passé...
         }
         else{
            return 1;
            //Veuillez choisir un fichier au format jpg, jpeg, png ou gif
         }
      }

      else{
         return 2;
         //Veuillez charger une image du produit
      }
   }
}


if (!function_exists('MultipleUpload')) {
   function MultipleUpload(){
      $Data = [];
      if (isset($_FILES['PhotoAdditionnelles'])){
         $count=count($_FILES['PhotoAdditionnelles']['name']);
         if ($count>3) {
           return 1;
         }
         else{

            for ($i=0; $i < $count; $i++) {
               $imgNom=$_FILES['PhotoAdditionnelles']['name'][$i];
               $imgSize=$_FILES['PhotoAdditionnelles']['size'][$i];
               $extension=pathinfo($imgNom,PATHINFO_EXTENSION);
               $uploadNom=hash('sha256', (microtime().$imgNom)).'.'.$extension;
               $imgPath='upload/'.$uploadNom;
               $extentionAutorise=['jpg','jpeg','png','gif'];
               $extentionAutorise=array_map('strtoupper', $extentionAutorise);
               $tmp=$_FILES['PhotoAdditionnelles']['tmp_name'][$i];
               if (in_array(strtoupper($extension),$extentionAutorise)) {
                  //move_uploaded_file($tmp,$imgPath);
                  $Data[$i] = [$uploadNom,$tmp,$imgPath];
               }
               else{
                  return 1;
               }
            }
            return $Data;  
         }

      }
   }
}

if (!function_exists('getProduitByUniqueId')) {
   function getProduitByUniqueId($items){
      if (!empty($items)) {
             GLOBAL $Connexion;
             $r='SELECT * FROM produit WHERE UniqueId = ?';
             $req=$Connexion->prepare($r);
             $req->execute([$items]);
             $donnee=$req->fetch(PDO::FETCH_OBJ);
             return $donnee;
      }
      else{
         die('Veuillez rentrer un paramettre valide le produit');
      }
   }
}

//Recupère le nom de la couleur à partir de la table produit en se basant sur l'Id du produit
if (!function_exists('getCouleurName')) {
   function getCouleurName($Id){
      if (!empty($Id)) {
             GLOBAL $Connexion;
             $r="SELECT Couleur FROM produit WHERE Id = ?";
             $req=$Connexion->prepare($r);
             $req->execute([$Id]);
             $donnee=$req->fetch(PDO::FETCH_OBJ);
             return $donnee;
      }
      else{
         die('Veuillez rentrer un paramettre valide pour le nom de la couleur');
      }
   }
}

if (!function_exists('getCouleur')) {
   function getCouleur($items){
      if (!empty($items)) {
             GLOBAL $Connexion;
             $r="SELECT CodeRgb FROM couleur WHERE CouleurArticle IN ($items)";
             $req=$Connexion->prepare($r);
             $req->execute();
             $donnee=$req->fetchAll(PDO::FETCH_OBJ);
             return $donnee;
      }
   }
}