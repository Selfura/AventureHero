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

		$req = $db->prepare('SELECT * FROM amembres WHERE login = ? AND role = 1');
			// && foncitonne aussi mais c'est plus clair avec AND

		$req->execute(array($compteAdmin));

		$logAdmin = $req->fetch();

		return $logAdmin;
	}

	public function newMembre($login, $password, $mail) {
		$db = $this->dbConnect();

		$req = $db->prepare('INSERT INTO amembres(login, password, validation, mail) VALUES (?, ?, 1, ?)');

		$newMembre = $req->execute(array($login, PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT), $mail));

		return $newMembre;
	}

	public function membreexist($login) {
		$db = $this->dbConnect();

		$req = $db->query('SELECT login FROM amembres WHERE login= "'. $_GET['pseudo'] .'"');

		$login = $req->fetch($login);

        return $login;

	}

}