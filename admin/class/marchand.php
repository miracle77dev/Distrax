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
		$Req = "INSERT INTO marchand(IdMarchand,ConfirmationCode,Nom,Numero,Email,Password) VALUES(?,?,?,?,?,?)";
		$q=$this->Connexion->prepare($Req);
		$q->execute($Data);
		$q->closeCursor();
		return 0;
	}

	public function ConnectUserAccount($Data)
	{
		$Req = "SELECT COUNT(Id) AS c FROM marchand WHERE (Email = :Email AND Password = :Password) OR (Numero = :Numero AND Password = :Password)";
		$q=$this->Connexion->prepare($Req);
		$q->execute([
			':Email'=>$Data[0],
			':Password'=>$Data[1],
			':Numero'=>$Data[0]
		]);
		$Retour = $q->fetch(PDO::FETCH_OBJ);

		if ($Retour->c == 1) {
			return 0; #Le compte existe, on connecte l'utilisateur
		}
		else{
			return 1; #Les identifiants saisis ne sont pas correct
		}
	}

	public function getIdMarchandByEmailOrNumb($Tag){
		$Req = "SELECT IdMarchand FROM marchand WHERE Email = :Email OR Numero = :Numero";
		$q = $this->Connexion->prepare($Req);
		$q->execute([':Email'=>$Tag,
			':Numero'=>$Tag
		]);
		return $q->fetch(PDO::FETCH_OBJ);
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