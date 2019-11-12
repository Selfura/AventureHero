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

	public function getMission($id_mission){
		$db = $this->dbConnect();
		//récupérer une mission via son id.

		$req = $db->prepare('SELECT id, chap_id, nom, image, texte, choix1, choix2, choix3, choix4  FROM amissions WHERE id= ?');
		$req->execute(array($id_mission));

		$mission = $req->fetch();

		return $mission;
	}

	public function getSuiteMission($id_choix) {
		$db = $this->dbConnect();

		//récupérer une suite de mission via son id.
		$req = $db->prepare('SELECT id, id_chapitre, id_mission, nom, image, texte, choix1, choix2, choix3, choix4  FROM asuite WHERE id= ?');
		$req->execute(array($id_choix));

		$suite = $req->fetch();

		return $suite;
	}

}