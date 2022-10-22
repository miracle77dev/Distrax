<?php

/**
 * Pour la gestion des different affichage de produit
 */
class viewProduit
{
	private $connexion;
	
	function __construct(PDO $connexion)
	{
		$this->connexion=$connexion;
	}
	public function vuePanier($id){
			$connexion=$this->connexion;
             $r='SELECT * FROM categorie WHERE id=:id';
             $req=$connexion->prepare($r);
             $req->execute([':id'=>$id]);
             $donnee=$req->fetch(PDO::FETCH_OBJ);
             return $donnee;
	}
		public function test(){
			$connexion=$this->connexion;
             $r='SELECT * FROM categorie WHERE id=1';
             $req=$connexion->prepare($r);
             $req->execute();
             $donnee=$req->fetch(PDO::FETCH_OBJ);
             return $donnee;
	}
	public function offreSpeciale($choix){
		 $connexion=$this->connexion;
		 $choix=htmlspecialchars($choix);
         $r='SELECT * FROM produit WHERE choix=:choix';
         $req=$connexion->prepare($r);
         $req->execute([':choix'=>$choix]);
         $donnee=$req->fetchAll(PDO::FETCH_OBJ);
         return $donnee;
	}
}