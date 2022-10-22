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
         elseif (empty($value) || trim($value) == "") {
            $Errors[] = "Veuillez remplir les différents champs";
          }
          else{
          	$Data [$key] = htmlspecialchars($value);
          }
    	}
    return $All = [$Errors,$Data];
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
           return 2;
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

