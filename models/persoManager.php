<?php

namespace Aventurehero\models;

require_once("models/manager.php");

use PDO;

class PersoManager extends Manager {

	public function getPersos() {
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, Nom, Karma, Age, Sexe, Progression, id_membre, Avatar FROM apersonnages ORDER BY Karma DESC');
		return $req;

	}

	public function createPerso($Avatar, $Nom, $Pouvoir, $Age, $Sexe) {
		$db = $this->dbConnect();
		// on crée un nouveau post

		$perso = $db->prepare('INSERT INTO aPersonnages(Avatar, Nom, Pouvoir, Karma, Age, Sexe) VALUES (?, ?, ?, ?, ?)');
		$createPerso = $perso->execute(array($Avatar, $Nom, $Pouvoir, $Age, $Sexe));

		return $createPerso;
	}

		public function getPerso($id_membre) {
		$db = $this->dbConnect();
		//on récupère un chapitre via son id

		$req = $db->prepare('SELECT id, Avatar, Nom, Pouvoir,Karma, Age, Sexe, Progression, id_membre FROM apersonnages WHERE id= ? ');
		$req->execute(array($id_membre));
		$char = $req->fetch();

		return $char;
	}

	public function updatePerso($id, $Avatar) {
		$db = $this->dbConnect();
		// on édite un l'avatar d'un hero.
		$char = $db->prepare('UPDATE apersonnages SET Avatar= ?, WHERE id= ?');

		$updatePerso = $char->execute(array($_POST['Avatar'], $id));

		return $updatePerso;
	}

	public function deletePerso($id) {
		$db = $this->dbConnect();
		// supression Hero, pour la partie Admin.
		$char = $db->prepare('DELETE FROM apersonnages WHERE id= ?');
		$deletePerso = $char->execute(array($id));

		return $deletePerso;
	}

}