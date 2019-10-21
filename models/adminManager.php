<?php

namespace Aventurehero\models;
use PDO;

require_once("models/manager.php");

class adminManager extends Manager {

	public function getLogin($login) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM amembres WHERE login= ?');

		$req->execute(array($login));

		$log = $req->fetch();

		return $log;

	}

}