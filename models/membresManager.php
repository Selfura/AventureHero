<?php

namespace Aventurehero\models;

require_once("models/manager.php");

use PDO;

class MembresManager extends Manager {

	public function getLogin($login) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM amembres WHERE login= ?');

		$req->execute(array($login));

		$log = $req->fetch();

		return $log;

	}

	public function getMembres() {
		$db = $this->dbConnect();
		$membres = $db->query('SELECT * FROM amembres ORDER BY login');

		return $membres;
	}

	public function adminAcces($compteAdmin) {
		$db = $this->dbConnect();
			// On récupére les membres ayant pour rôle admin.

		$req = $db->prepare('SELECT * FROM amembres WHERE login = ? AND role = 1');

		$req->execute(array($compteAdmin));

		$logAdmin = $req->fetch();

		return $logAdmin;
	}

	public function newMembre($login, $password, $mail) {
		$db = $this->dbConnect();

		$req = $db->prepare('INSERT INTO amembres(login, password, validation, mail) VALUES (?, ?, 1, ?)');

		$newMembre = $req->execute(array($login, $password, $mail));

		return $newMembre;
	}

	public function membreexist($login) {
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT login FROM amembres WHERE login= ?');

		$req->execute(array($login));
		$login = $req->fetch();


		return $login;
	}

	public function deleteMembre($id) {
		$db = $this->dbConnect();

		$membre = $db->prepare('DELETE FROM amembres WHERE id= ?');
		$deleteMembre = $membre->execute(array($id));

		return $deleteMembre;
		
	}	

}