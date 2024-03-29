<?php  
ini_set('display_errors',1);
require("models/manager.php");
require("models/membresManager.php");
require("models/newsManager.php");
require("models/aventuresManager.php");
require("models/persoManager.php");


use Aventurehero\models\MembresManager;
use Aventurehero\models\NewsManager;
use Aventurehero\models\AventuresManager;
use Aventurehero\models\PersoManager;

function menu($compteAdmin) {

	$membresManager = new MembresManager();
	$logAdmin = $membresManager->adminAcces($compteAdmin);

		if(isset($_COOKIE['login'])) {

			if ($logAdmin = 1) {
				require('views/nav_adm.php');
			} 	else {
				require ("views/nav_co.php");
			}
		} else {
        	require ("views/nav_deco.php");
    }
	

}


function home() {
	$newsManager = new NewsManager();
	$lastNews = $newsManager->getLastNews();

	require('views/home.php');
}

function login() {
	require('views/login.php');
}

function incription() {


	require('views/inscription.php');
}

function verifPseudo($login) {
	$membresManager = new MembresManager();
	$membreExist = $membresManager->membreexist($login);

	
     if ($membreExist) {
		echo  1; // "1" est valide
	} else {
		echo 0;
	}

}

function persoexist($nom) {
	$persoManager = new PersoManager();
	$nom = $persoManager->persoexist($nom);

	if ($nom){
		echo 1;
	} else {
		echo 0;
	}
}

function homelog($id_membre) {
	$newsManager = new NewsManager();
	$lastNews = $newsManager->getLastNews();

	$persoManager = new PersoManager();
	$char = $persoManager->getPerso($id_membre);

	require('views/accueilco.php');
}
function rank() {

	$persoManager = new PersoManager();
	$personnages = $persoManager->getPersos();

	//$personnages = isset($_POST['id_membre']) ? $_POST['id_membre'] : NULL;

	require('views/rank.php');
}
function contact() {
	require('views/contact.php');
}
/*function aventure() {
	$aventuresManager = new AventuresManager();
	$chapitres = $aventuresManager->getChapitres();

	require('views/aventure.php');
}*/
function missions($id_membre) {
	$aventuresManager = new AventuresManager();
	$missions = $aventuresManager->getMissions();

	$persoManager = new PersoManager();
	$char = $persoManager->getPerso($id_membre);

	$charIsCreated = $char['id_membre'];

		if($charIsCreated) {
			require('views/aventure.php');
	} else {
		header('Location: index.php?action=prologue');
	}
}
function aide() {
	require('views/aide.php');
}
function personnage($id_membre) {
	$persoManager = new PersoManager();
	$char = $persoManager->getPerso($id_membre);

	require('views/personnage.php');
}

function mission($id_mission) {
	

	if(!empty($_SESSION['choixPrecedents'])){
		$progression  = end($_SESSION["choixPrecedents"]);

		choixMission($progression['choix'], $progression['renvoi'], true);

	}else {
		$persoManager = new PersoManager();
		$progression = json_decode($persoManager->getProgression()[0]);
		choixMission($progression->choix, $progression->renvoi, true);
	}
	

}

function choixMission($id_choix, $id_renvoi, $chargement = false){
	
	$action = array("choix" => $id_choix, "renvoi" => $id_renvoi);

	$estUneActionPermise = isset($_SESSION["actionsPossibles"]) && in_array($action, $_SESSION["actionsPossibles"]);
	$estUnChoixPrecedent = isset($_SESSION["choixPrecedents"]) && in_array($action, $_SESSION['choixPrecedents']);
	$estUnePartieChargee = $chargement === true;

	if($estUneActionPermise || $estUnChoixPrecedent || $estUnePartieChargee){

		$aventuresManager = new AventuresManager();
		$persoManager = new PersoManager();

		if($estUneActionPermise){

			if(isset($_SESSION['choixTemporaire'])){
				$_SESSION["choixPrecedents"][] = $_SESSION['choixTemporaire'];
			}

			$_SESSION['choixTemporaire'] = $action;		

			$updateKarma = $persoManager->updateKarma($id_choix);
			
		}
		else {

			if(isset($_SESSION["choixPrecedents"]) && $action == end($_SESSION["choixPrecedents"])){
				
				$updateKarma = $persoManager->updateKarma($_SESSION['choixTemporaire']['choix'], true);
				$_SESSION['choixTemporaire'] = array_pop($_SESSION["choixPrecedents"]);

			}

			if($estUnePartieChargee){
				$_SESSION["choixPrecedents"] = [];
				$_SESSION['choixTemporaire'] = $action;
			}
			
		}

		$mission = $aventuresManager->getMission($id_renvoi);
		$choix = $aventuresManager->getChoix($id_renvoi);

		$_SESSION["actionsPossibles"] = [];

		if($mission) {

			$progression = json_decode($persoManager->getProgression()[0]);
			$progression->choix = $id_choix;
			$progression->renvoi = $id_renvoi;

			$persoManager->updateProgression(json_encode($progression));

			require('views/mission.php');

		} else {
			throw new Exception("La mission n'existe pas.");	
		}

	}
	else {
		mission(null);
	}


}


function karma($id_membre, $karma) {
	$aventuresManager = new AventuresManager();

	$karma = $aventuresManager->updateKarma($id_membre, $karma, $_SESSION['id']);
}

function prologue() {
	$aventuresManager = new AventuresManager();
	$prologue = $aventuresManager->getPrologue();

	$donnees = $prologue->fetch();

	require('views/prologue.php');
}

function charcrea() {

	$persoManager = new PersoManager();
	$avatar = $persoManager->getAvatar();

	require('views/creation_personnage.php');
}

function adm($compteAdmin) {

	$membresManager = new MembresManager();

	$aventuresManager = new AventuresManager();
	$membres = $membresManager->getMembres();		
	$allMissions = $aventuresManager->getAllMissions();

	
	if ($logAdmin = $membresManager->adminAcces($compteAdmin)) {


		require('views/backend/adm.php');
	} else {
		header('Location: index.php?action=homelog');
	}

function allMissions(){
	$membresManager = new MembresManager();
	

	header('Location: index.php?action=adm');
}

}


/************* CONNEXION ***************** 

*************		    *******************/


function connect($login)
{	

	$membresManager = new MembresManager();
	$log = $membresManager->getLogin($login);
	

	if ($_POST['login'] == $log['login']) {

		$login = $log['login'];

		if(password_verify($_POST['password'], $log['password'])) {

			$_SESSION['login'] = $log['login'];
			$_SESSION['id'] = $log['id'];
			setcookie('login', $login, time() + 3600, null, null, false, true);

			header('Location: index.php?action=homelog');
		} else {
		//header('Location: index.php?action=login');
		echo"<script type='text/javascript'> alert('Mot de passe ou Identifiant erroné(s).');
											window.location.replace('index.php?action=login');
		</script>";
	}
	} 
	else {
		//header('Location: index.php?action=login');
		echo"<script type='text/javascript'> alert('Mot de passe ou Identifiant erroné(s).');
											window.location.replace('index.php?action=login');
		</script>";
	}
}


function logout() {
	session_start();
	$_SESSION = array();
	session_destroy();

	setcookie('login','', time()-10);

	header('Location: index.php?action=accueil');
}


// Inscription 

function newMembre($login, $password, $mail) {

	$membresManager = new MembresManager();

	$newMembre = $membresManager->newMembre($login, $password, $mail);

	header('Location: index.php?action=accueilco');
}



/************* ANNONCES ***************** 

*************		    *******************/
//Creation d'annonce
function newNews($titre, $annonce) {

	session_start();
	$newsManager = new NewsManager();

    $createNews = $newsManager->createNews($titre, $annonce);
	header('Location: index.php?action=adm');
}
//Lecture des Annonces

function news()
{	
	$newsManager = new NewsManager();
	$lastNews = $newsManager->getLastNews();
	$news = $newsManager->getNews();

	require('views/news.php');
}


/************* CREATION PERSO ***************** 

*************		    *******************/

function createPerso($Avatar, $Nom, $Pouvoir, $Age, $Sexe) {

	session_start();
	$persoManager = new PersoManager();
	$createPerso = $persoManager->createPerso($Avatar, $Nom, $Pouvoir, $Age, $Sexe, $_SESSION['id']);

	if($createPerso === true) {
		header('Location: index.php?action=homelog');
	} else {
		throw new Exception("Impossible de créer le nouveau personnage.");
		header('Refresh:2; url= index.php?action=char_creation');
	}

}

/************* PARTIE ADMIN ***************** 

*************		    *******************/


//Ajout de chapitre
function newChap($nom, $numero, $image) {

	session_start();
	$aventuresManager = new AventuresManager();

	$target = "public/images/";
	$file = basename($_FILES['image']['name']);
	$sizemax = 4000000;
	$size = filesize($_FILES['image']['tmp_name']);
	$extensions = array('.png', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['image']['name'], '.');
	// Verif de sécurité
	if(!in_array($extension, $extensions)) 
	{
		$erreur = 'Vous devez utiliser des images de type .png, .jpeg, .jpg';
	}
	if($size>$sizemax)
	{
     $erreur = 'Le fichier est trop volumineux. Utilisez des fichiers de moins de 4mo.';
	}
	
    $createChap = $aventuresManager->createChap($nom, $numero, $image['name']);
	header('Location: index.php?action=adm');
}


// AJOUT DE MISSION


function newMission($chap_id, $nom, $image, $texte, $niveau) {

	session_start();
	$aventuresManager = new AventuresManager();

	$target = "public/images/";
	$file = basename($_FILES['image']['name']);
	$sizemax = 4000000;
	$size = filesize($_FILES['image']['tmp_name']);
	$extensions = array('.png', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['image']['name'], '.');
	// Verif de sécurité
	if(!in_array($extension, $extensions)) 
	{
		$erreur = 'Vous devez utiliser des images de type .png, .jpeg, .jpg';
	}
	if($size>$sizemax)
	{
     $erreur = 'Le fichier est trop volumineux. Utilisez des fichiers de moins de 4mo.';
	}
	
    $createMission = $aventuresManager->createMission($chap_id, $nom, $image['name'], $texte, $niveau);
	header('Location: index.php?action=adm');
}

function newChoix($id_mission, $id_renvoi, $texte, $karma) {

	session_start();
	$aventuresManager = new AventuresManager();

    $createChoix = $aventuresManager->createChoix($id_mission, $id_renvoi, $texte, $karma);
	header('Location: index.php?action=adm');
}

function deleteMembre($id) {

	$membresManager = new MembresManager();

	$deleteMembre = $membresManager->deleteMembre($id);

	if($deleteMebre === false) {
		throw new Exception('Impossible de supprimer le Membre');
	}
	else {
		header('Location: index.php?action=adm');
	}
}