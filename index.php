<?php
ini_set('display_errors',1);

require('controllers/controller.php');



//try {
if(isset($_GET['action'])) {

	switch ($_GET['action']) {
		case 'accueil' :
		if(isset($_COOKIE['login'])) {
			session_start();
			homelog(isset($_SESSION['id']));
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

		case 'inscriptionfini':

			newMembre($_POST['pseudo'], $_POST['mdp'], $_POST['mail']);

			 header('Location: index.php?action=accueil');

			break;

		case 'homelog' :
		if(isset($_COOKIE['login'])) {
			session_start();
			homelog($_SESSION['id']);
		} else {
            header('Location: index.php?action=accueil');
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
            header('Location: index.php?action=accueil');
        }
			break;
		case 'missions' :
		if(isset($_COOKIE['login'])) {
			session_start();
			missions();
		} else {
            header('Location: index.php?action=accueil');
        }
			break;

		case 'mission' :
		
			if(isset($_COOKIE['login'])) {
				session_start();
				if (isset($_GET['id']) && $_GET['id'] > 0 ){ 
				mission(($_GET['id']));
			} else {
				header('Refresh: 1; url = index.php?action=aventure');
				throw new Exception("Le chapitre n'existe pas");
				
			}
			} else {
	            header('Location:index.php?action=accueil');
	        
        }
			break;

		case 'choix' :
		if(isset($_COOKIE['login'])) {
				session_start();
				if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['missionId']) && $_GET['missionId'] > 0){ 
				choixMission(($_GET['id']), $_GET['missionId']);
			} else {
				//header('Refresh: 1; url = index.php?action=aventure');
				throw new Exception("Le chapitre n'existe pas");
				
			}
			} else {
	            header('Location:index.php?action=accueil');
	        
        }
			break;

		case 'prologue' :
		if(isset($_COOKIE['login'])) {
			session_start();
			prologue();
		} else {
            header('Location: index.php?action=accueil');
        }
        break;

        case 'char_creation' :
		if(isset($_COOKIE['login'])) {
			session_start();
			charcrea();
		} else {
            header('Location: index.php?action=homelog');
        }
        break;

		case 'aide' :
			aide();
			break;

		case 'personnage' :
		if(isset($_COOKIE['login'])) {
			session_start();
			personnage($_SESSION['id']);
		} else {
            header('Location: index.php?action=accueil');
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
            header('Location: index.php?action=accueil');
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
			homelog($_SESSION['login']);
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

	if($_GET['action'] !== "mission" && $_GET['action'] !== "choix"){
		if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION["choixPrecedents"]) && isset($_SESSION['choixTemporaire'])){
			$_SESSION["choixPrecedents"] = [];
			$_SESSION['choixTemporaire'] = [];
		}
	}
}
else{
		home();
	}
/*}
catch(Exception $e) {

    echo 'Erreur : ' . $e->getMessage();
    header('Location= index.php?action=accueil');
}*/