<?php

class Membre
{
	private $nom;
	private $email;
	private $numero;
	private $mdp;
	private $ville;
	private $db;

	public function __construct(PDO $connexion){
    $this->db=$connexion;
	}
	public function inscription(array $infoMembre){
		$salt='$D.c@7';
		$this->nom=$infoMembre['nom'];
		$this->email=$infoMembre['email'];
		$this->numero=$infoMembre['numero'];
		$this->ville=$infoMembre['ville'];
		$this->mdp=md5($infoMembre['mdp'].$salt);
		$mdp=$this->mdp;

		$r='INSERT INTO Membres(nom,email,numero,ville,mdp) VALUES(:nom,:email,:numero,:ville,:mdp)';
		$req=$this->db->prepare($r);
		$req->execute([
			'nom'=>$this->nom,
			'email'=>$this->email,
			'numero'=>$this->numero,
			'ville'=>$this->ville,
			'mdp'=>$mdp
		]);
		$req->closeCursor();
	}

	public function connexion(array $infoConnect){
		$salt='$D.c@7';
		$id=$infoConnect['id'];
		$mdpConnect=md5($infoConnect['mdp'].$salt);

		$s='SELECT id,nom,email,numero,mdp FROM Membres WHERE (email=? AND mdp=?) OR (numero=? AND mdp=?)';
		$qr=$this->db->prepare($s);
		$qr->execute([$id,$mdpConnect,$id,$mdpConnect]);
		$data=$qr->fetchAll();
		if (count($data)!=0) {
			return true;
		}
	}

	public function id($id){
		$q='SELECT id FROM Membres WHERE email=? OR numero=?';
		$query=$this->db->prepare($q);
	    $query->execute([$id,$id]);
	    $donnee=$query->fetch();
	    return $donnee['id'];
	}

	public function userInfo($id){
		$q='SELECT id,nom,ville,numero FROM Membres WHERE id=?';
		$query=$this->db->prepare($q);
	    $query->execute([$id]);
	    $userInfo=$query->fetch(PDO::FETCH_OBJ);
	    return $userInfo;
	}

	
}

