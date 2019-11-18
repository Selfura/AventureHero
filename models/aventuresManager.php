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

	public function getMissions(){
		$db = $this->dbConnect();
		//récupérer une mission via son id.

		$req = $db->query('SELECT id, chap_id, nom, image, texte, niveau  FROM amissions WHERE niveau = 1');
		//$req->execute(array($id_mission));

		//$mission = $req->fetch();

		return /*$mission*/ $req;
	}

	public function getSuite() {
		$db = $this->dbConnect();

		//récupérer une suite de mission via son id.
		$req = $db->query('SELECT id, id_chapitre, id_mission, nom, texte, choix1, choix2, choix3, choix4  FROM asuite');
		//$req->execute(array($id_choix));

		//$suite = $req->fetch();

		return $req;
	}

	public function getFin() {
		$db = $this->dbConnect();

		//récupérer une suite de mission via son id.
		$req = $db->query('SELECT id, id_chapitre, id_mission, id_suite, nom, texte, choix1, choix2, choix3, choix4  FROM afin');
		//$req->execute(array($id_choix));

		//$suite = $req->fetch();

		return $req;
	}


	public function getChapitres() {
		$db =$this->dbConnect();

		//récupération des données des chapitres.
		$req = $db->query('SELECT id, nom, numero, image FROM achapitres');
		return $req;
	}

		public function getMission($id_mission){
		$db = $this->dbConnect();
		//récupérer une mission via son id.

		$req = $db->prepare('SELECT id, chap_id, id_choix, nom, image, texte, niveau  FROM amissions WHERE id = ?');
		$req->execute(array($id_mission));

		$mission = $req->fetch();

		return $mission;
	}

		public function getB($id_mission){
		$db = $this->dbConnect();
		//récupérer une mission via son id.

		$req = $db->prepare('SELECT id, chap_id, id_choix, nom, image, texte, niveau  FROM amissions WHERE id = ?');
		$req->execute(array($id_mission));

		$missionB = $req->fetch();

		return $missionB;
	}


	public function getChoix($id_mission) {
		$db =$this->dbConnect();
		// On récupére les choix dans la BDD
		$choix = $db->prepare('SELECT id, id_mission, id_renvoi, texte, karma FROM achoix WHERE id_mission = ? ORDER BY id');

		$choix->execute(array($id_mission));

		return $choix;

	}

}