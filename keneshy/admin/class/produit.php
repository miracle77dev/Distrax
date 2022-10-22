<?php 
/**
 * 
 */
class Produit
{
	private $db;

	function __construct(PDO $connexion)
	{
		$this->db=$connexion;
	}


  
    public function addProduit(array $produits){
         $titre=$produits[0]['titre'];
         $nouveau=$produits[0]['nouveau'];
         $prix=$produits[0]['prix'];
         $descrip=$produits[0]['descrip'];
         $choix=$produits[0]['choix'];
    	 $categorie=$produits[0]['categorie'];
         $sous_categorie=$produits[0]['sous_categorie'];
         $reduction=$produits[0]['reduction'];
         $etoile=$produits[0]['etoile'];
    	 $prix_promo=$prix-($prix*$reduction/100);
         $img1=$produits['img'];
         $img2=$produits['img2'];
         $img3=$produits['img3'];

    	 $r="INSERT INTO produit(titre,prix,descrip,prix_promo,etoile,nouveau,choix,categorie,sous_categorie,reduction,img,img2,img3) 
    	 VALUES(:titre,:prix,:descrip,:prix_promo,:etoile,:nouveau,:choix,:categorie,:sous_categorie,:reduction,:img,:img2,:img3)";
		 $req=$this->db->prepare($r);
		 $req->execute([
		 	'titre'=>$titre,
		 	'prix'=>$prix,
            'descrip'=>$descrip,
            'prix_promo'=>$prix_promo,
            'etoile'=>$etoile,
            'nouveau'=>$nouveau,
            'choix'=>$choix,
            'categorie'=>$categorie,
            'sous_categorie'=>$sous_categorie,
            'reduction'=>$reduction,
		 	'img'=>$img1,
		 	'img2'=>$img2,
		 	'img3'=>$img3
		 ]);
		$req->closeCursor(); 
        //header('location: ajouter_produit.php?stat=1');


    }


}