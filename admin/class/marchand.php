<?php 

/**
 * 
 */
class Marchand
{
	
	private $Connexion;
	function __construct(PDO $Connexion)
	{
		$this->Connexion = $Connexion;
	}

	public function AddMarchand($Data)
	{
		$Req = "INSERT INTO marchand(IdMarchand,ConfirmationCode,Nom,Numero,Email,PageFacebook) VALUES(?,?,?,?,?,?)";
		$q=$this->Connexion->prepare($Req);
		$q->execute($Data);
		$q->closeCursor();
		return 0;
	}

	public function getMarchandByIdMarchand($IdMarchand){
		$Req = "SELECT * FROM marchand WHERE IdMarchand = ?";
		$q = $this->Connexion->prepare($Req);
		$q->execute([$IdMarchand]);
		return $q->fetchAll(PDO::FETCH_OBJ);
	}

	public function CodeVerification($Data)
	{
		$Req = "SELECT COUNT(ConfirmationCode) AS c FROM marchand WHERE IdMarchand = ? AND ConfirmationCode = ?";
		$q=$this->Connexion->prepare($Req);
		$q->execute($Data);
		$Retour = $q->fetch(PDO::FETCH_OBJ);

		if ($Retour->c == 1) {
			return 0; #Le compte existe
		}
		else{
			return 1; #Le compte n'existe pas ou le numéro saisi n'est pas correct
		}
	}
	//Cette fonction prend deux parametre donc le premier est
	//le code de confirmation et le second l'Id marchand
	public function Confirmation($Data){
		$Req = "UPDATE marchand SET ConfirmationCode = ? WHERE Id = ?";
		$q=$this->Connexion->prepare($Req);
		$q->execute($Data);
		return 0;
	}
}