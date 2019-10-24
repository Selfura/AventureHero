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

	public function adminAcces($compteAdmin) {
		$db = $this->dbConnect();
		// On récupére les membres ayant pour rôle admin.
		
		$req = $db->prepare('SELECT * FROM amembres WHERE compteAdmin=?');

		$req->execute(array($compteAdmin));

		$logAdmin = $req->fetch();

		return $logAdmin;
	}

}