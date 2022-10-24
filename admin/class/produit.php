<?php 

/**
 * Gestion de produit
 */
class Produit
{
	private $Connexion;
	function __construct(PDO $Connexion)
	{
		$this->Connexion = $Connexion;
	}

	public function AddProduit($Data){
		$Req='INSERT INTO 
		produit(IdCategorie,NomProduit,PrixProduit,QteProduit,PetiteDescription,GrandeDescription,NouveauProduit,Couleur,Taille,ImagePrincipale,DeuxiemeImage,TroisiemeImage,QuatriemeImage,Tag,Emplacement,UniqueId)
		VALUES(:IdCategorie,:NomProduit,:PrixProduit,:QteProduit,:PetiteDescription,:GrandeDescription,:NouveauProduit,:Couleur,:Taille,:ImagePrincipale,:DeuxiemeImage,:TroisiemeImage,:QuatriemeImage,:Tag,:Emplacement,:UniqueId)';

		$q=$this->Connexion->prepare($Req);
		$q->execute([
			':IdCategorie'=>$Data['Categorie'],
			':NomProduit'=>$Data['NomProduit'],
			':PrixProduit'=>$Data['PrixProduit'],
			':QteProduit'=>$Data['QteProduit'],
			':PetiteDescription'=>$Data['PetiteDescription'],
			':GrandeDescription'=>$Data['GrandeDescription'],
			':NouveauProduit'=>$Data['NouveauProduit'],
			':Couleur'=>trim($Data['CouleursProduit']),
			':Taille'=>trim($Data['TaillesProduit']),
			':ImagePrincipale'=>$Data['ImagePrincipale'],
			':DeuxiemeImage'=>$Data['DeuxiemeImage'],
			':TroisiemeImage'=>$Data['TroisiemeImage'],
			':QuatriemeImage'=>$Data['QuatriemeImage'],
			':Tag'=>$Data['TagProduit'],
			':Emplacement'=>$Data['Emplacement'],
			':UniqueId'=>$Data['UniqueId']
		]);
		$q->closeCursor();
	}

	public function AddToPromo($Data)
	{
		$Req = "INSERT INTO promotion(UniqueId,Active,Valeur,Delai) VALUES(?,?,?,?)";
		$q=$this->Connexion->prepare($Req);
		$q->execute($Data);
		$q->closeCursor();
	}

	public function AddCategorie($Data)
	{
		$Req = "INSERT INTO categorie(Categorie,Description) VALUES(?,?)";
		$q=$this->Connexion->prepare($Req);
		$q->execute($Data);
		$q->closeCursor();
		return 1;
	}
	public function getProduit()
	{
		$Req = "SELECT * FROM produit";
		$q=$this->Connexion->prepare($Req);
		$q->execute();
		$Donnee=$q->fetchall(PDO::FETCH_OBJ);
		$q->closeCursor();
		return $Donnee;
	}
	public function getProduitById($Id)
	{
		$Req = "SELECT * FROM produit WHERE Id = ?";
		$q=$this->Connexion->prepare($Req);
		$q->execute([$Id]);
		$Donnee=$q->fetch(PDO::FETCH_OBJ);
		$q->closeCursor();
		return $Donnee;
	}
}