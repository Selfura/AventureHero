<?php

namespace Aventurehero\models;

require_once("models/manager.php");

use PDO;

class newsManager extends Manager {

	public function getNews() {

		$db = $this->dbConnect();

		$req = $db->query('SELECT id, titre, annonce, DATE_FORMAT(date_creation, "Publié le %d/%m/%Y") AS date_creation_fr FROM anews ORDER BY id DESC ');
		return $req;
	}

	public function getLastNews() {
		$db = $this->dbConnect();

		$req = $db->query('SELECT id, titre, annonce, DATE_FORMAT(date_creation, "Publié le %d/%m/%Y") AS date_creation_fr FROM anews ORDER BY date_creation DESC LIMIT 1 ');
		return $req;
	}

	public function createNews($titre, $annonce) {
		$db = $this->dbConnect();
		//création d'une annonce.

		$news =  $db->prepare('INSERT INTO anews(titre, annonce, date_creation) VALUES (?, ?, NOW())');
		$createNews = $news->execute(array($titre, $annonce));

		return $createNews;
	}

	public function deleteNews($id) {
		$db = $this->dbConnect();
		// supression news, pour la partie Admin.
		$news = $db->prepare('DELETE FROM anews WHERE id= ?');
		$deleteNews = $news->execute(array($id));

		return $deleteNews;
	}

	public function updateNews($id) {
		$db = $this->dbConnect();
		// on édite une News
		$news = $db->prepare('UPDATE anews SET titre= ?, annonce=? WHERE id= ?');

		$updateNews = $news->execute(array($_POST['titre'], $_POST['annonce'], $id));

		return $updateNews;
	}


	}