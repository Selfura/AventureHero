<?php

namespace Aventurehero\models;

require_once("models/manager.php");

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

		$post =  $db->prepare('INSERT INTO anews(titre, annonce, date_creation) VALUES (?, ?, NOW()');
		$createNews = $post->execute(array($titre, $annonce));

		return $createNews;
	}

	}