<?php

require('controllers/controller.php');



//try {
if(isset($_GET['action'])) {

	switch ($_GET['action']) {
		case 'accueil' :
		if(isset($_COOKIE['login'])) {
			session_start();
			homelog();
		} else {
            home();
        }
			break;

		case 'login' :
			login();
			break;

		case 'inscription' :
			incription();
			break;

		case 'homelog' :
		if(isset($_COOKIE['login'])) {
			session_start();
			homelog();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
			break;

		case 'news' :
			news();
			break;

		case 'rank' :
			rank(isset($_GET['id_membre']));
			break;

		case 'contact' :
			contact();
			break;

		case 'aventure' :
		if(isset($_COOKIE['login'])) {
			session_start();
			aventure();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
			break;
		case 'missions' :
		if(isset($_COOKIE['login'])) {
			session_start();
			missions();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
			break;

		case 'mission' :
		if(isset($_COOKIE['login'])) {
			session_start();
			mission();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
			break;

		case 'prologue' :
		if(isset($_COOKIE['login'])) {
			session_start();
			prologue();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
        break;

        case 'char_creation' :
		if(isset($_COOKIE['login'])) {
			session_start();
			charcrea(isset($_GET['avatar']));
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
        break;

		case 'aide' :
			aide();
			break;

		case 'personnage' :
		if(isset($_COOKIE['login'])) {
			session_start();
			personnage($_GET['id_membre']);
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
        break;

		case 'adm' :
		if(isset($_COOKIE['login'])) {
			session_start();
			adm($_SESSION['login']);
		} else {
			header('Location: index.php?action=homelog');
		}
		break;

		case 'log' :
		if(!empty($_POST['login'])) {
            session_start();
            connect($_POST['login']);
        }
        else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
        break;


        case 'logout':
        session_start();
        $_SESSION = array();
        session_destroy();
            logout();
        break;

        case 'accueilback':
        if(isset($_COOKIE['login'])) {
			$_SESSION['login'] = $_COOKIE['login'];
			homelog();
		} else {
            home();
        }
        break;

        case 'newNews':
        if ($_POST['titre'] != NULL && $_POST['annonce'] != NULL) {
        	newNews($_POST['titre'], $_POST['annonce']);
        } else {
            throw new Exception("Les champs doivent tous être remplis.");   
        }
        break;

        case 'createPerso':
        if ($_POST['Avatar'] != NULL && $_POST['Nom'] != NULL && $_POST['Pouvoir'] != NULL && $_POST['Age'] != NULL && $_POST['Sexe'] != NULL) {
			createPerso( $_POST['Avatar'], $_POST['Nom'], $_POST['Pouvoir'], $_POST['Age'], $_POST['Sexe']);
		} else {
            throw new Exception("Les champs doivent tous être remplis.");
        }
        break;
	}
}
else{
		home();
	}
/*}
catch(Exception $e) {

    echo 'Erreur : ' . $e->getMessage();
    header('Refresh:3; url= ../aventurehero/index.php?action=accueil');
}*/