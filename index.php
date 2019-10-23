<?php

require('controllers/controller.php');



//try {
if(isset($_GET['action'])) {

	switch ($_GET['action']) {
		case 'accueil' :
			home();
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
			$_SESSION['login'] = $_COOKIE['login'];
			homelog();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
			break;

		case 'news' :
			news();
			break;

		case 'rank' :
			rank();
			break;

		case 'contact' :
			contact();
			break;

		case 'aventure' :
		if(isset($_COOKIE['login'])) {
			session_start();
			$_SESSION['login'] = $_COOKIE['login'];
			aventure();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
			break;
		case 'missions' :
		if(isset($_COOKIE['login'])) {
			session_start();
			$_SESSION['login'] = $_COOKIE['login'];
			missions();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
			break;

		case 'mission' :
			session_start();
			mission();
			break;

		case 'aide' :
			aide();
			break;

		case 'personnage' :
		if(isset($_COOKIE['login'])) {
			session_start();
			$_SESSION['login'] = $_COOKIE['login'];
			personnage();
		} else {
            header('Location: ../aventurehero/index.php?action=accueil');
        }
        break;

		case 'adm' :
		if(isset($_COOKIE['login'])) {
           session_start();
			$_SESSION['login'] = $_COOKIE['login'];
			adm();
		} else {
			header('Location: index.php?action=accueil');
		}
		break;

		case 'log' :
		if(!empty($_POST['login'])) {
            session_start();
            connect($_POST['login']);;
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