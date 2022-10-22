<?php
/**
 * Cette classe permet de controler toutes les données saisis par l'utilisateur
 *Avant de les inserer dans la base de donnée
 */
class Controle
{
	private $nom;
	private $email;
	private $numero;
	private $mdp;
	private $errors;
	private $db;
	private $count;
	
	function __construct(array $infoMembre,PDO $connexion)
	{
		$this->nom=$infoMembre['nom'];
		$this->email=$infoMembre['email'];
		$this->numero=$infoMembre['numero'];
		$this->mdp=$infoMembre['mdp'];
		$this->db=$connexion;
	}
	

	public function verifie(){
		$nom=$this->nom;
		$email=$this->email;
		$numero=$this->numero;
		$mdp=$this->mdp;
		$this->errors=$errors=[];
		if (mb_strlen($nom)<=3) {
			$errors[]='Le nom d\'utilisateur doit etre d\'au moins 3 caractère.';
		}
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$errors[]='L\'adresse E-mail choisi n\'est pas valide';
		}
		if ($email) {
			$r='SELECT email FROM Membres WHERE email=?';
			$req=$this->db->prepare($r);
			$req->execute([$email]);
			$dataEmail=$req->fetchAll();
			if (count($dataEmail)!=0) {
			     $errors[]='Cet adresse E-mail est déjà utilisé';
			}
		}
		if ($numero) {
			$r='SELECT numero FROM Membres WHERE numero=?';
			$req=$this->db->prepare($r);
			$req->execute([$numero]);
			$dataNumero=$req->fetchAll();
			if (count($dataNumero)!=0) {
			$errors[]='Ce numéro de tél. est déjà utilisé';
			}
		}
		if (mb_strlen($mdp)<5) {
			$errors[]='Mot de passe trop court, (Au moins 6 caractères)';
		}
		if (count($errors)==0) {
			return TRUE;
		}
		else{
			return $errors;
		}
	}

	
}
