<?php


require_once("models/manager.php");

		$req = $db->query('SELECT login FROM amembres WHERE login= "'. $_GET['pseudo'] .'"');

		$login = $req->fetch($login);

		if (strtolower($_GET['pseudo']) == strtolower($login['login']))
            {
                $erreur = "Ce nom d'utilisateur est déjà utilisé.";
            }

	}