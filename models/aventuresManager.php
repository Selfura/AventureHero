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


	public function getChoix($id_mission) {
		$db =$this->dbConnect();
		// On récupére les choix dans la BDD
		$choix = $db->prepare('SELECT id, id_mission, id_renvoi, texte, karma FROM achoix WHERE id_mission = ? ORDER BY id');

		$choix->execute(array($id_mission));

		return $choix;

	}


		public function getAllMissions(){
		$db = $this->dbConnect();
		//récupérer une mission via son id.

		$req = $db->query('SELECT id, chap_id, nom, texte, niveau  FROM amissions ORDER BY id');
	

		return /*$mission*/ $req;
	}


// CREATION PARTIE ADMIN 


	public function createChap($nom, $numero, $image) {
		$db = $this->dbConnect();
		// on crée un nouveau post

		$chap = $db->prepare('INSERT INTO achapitres(nom, numero, image) VALUES (?, ?, ?)');
		$createChap = $chap->execute(array($nom, $numero, $image));

		return $createChap;
	}


	public function createMission($chap_id, $nom, $image, $texte, $niveau) {
		$db = $this->dbConnect();
		// on crée un nouveau post

		$req = $db->prepare('INSERT INTO amissions(chap_id, nom, image, texte, niveau) VALUES (?, ?, ?, ?, ?)');
		$createMission= $req->execute(array($chap_id, $nom, $image, $texte, $niveau));

		return $createMission;
	}

	public function createChoix($id_mission, $id_renvoi, $texte, $karma) {
		$db = $this->dbConnect();
		// on crée un nouveau post

		$req = $db->prepare('INSERT INTO achoix(id_mission, id_renvoi, texte, karma) VALUES (?, ?, ?, ?)');
		$createChoix= $req->execute(array($id_mission, $id_renvoi, $texte, $karma));

		return $createChoix;
	}


}