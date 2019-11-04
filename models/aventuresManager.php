<?php

namespace Aventurehero\models;

require_once("models/manager.php");

use PDO;

class AventuresManager extends Manager {

	public function getPrologue() {
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, texte, choix1, choix2, choix3 FROM aprologue');
		return $req;

	}


}