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
function homelog($id_membre) {
	$newsManager = new NewsManager();
	$lastNews = $newsManager->getLastNews();

	$persoManager = new PersoManager();
	$char = $persoManager->getPerso($id_membre);

	require('views/accueilco.php');
}
function rank($id_membre) {

	$persoManager = new PersoManager();
	$personnages = $persoManager->getPerso($id_membre);

	$personnages = isset($_POST['id_membre']) ? $_POST['id_membre'] : NULL;

	require('views/rank.php');
}
function contact() {
	require('views/contact.php');
}
function aventure() {
	$aventuresManager = new AventuresManager();
	$chapitres = $aventuresManager->getChapitres();

	require('views/aventure.php');
}
function missions() {
	$aventuresManager = new AventuresManager();
	$missions = $aventuresManager->getMissions();
	require('views/missions.php');
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
	$aventuresManager = new AventuresManager();
	$persoManager = new PersoManager();

	//$progression = json_decode($persoManager->getProgression()[0])->choix;


	$updateKarma = $persoManager->updateKarma($id_mission);
	$mission = $aventuresManager->getMission($id_mission);
	$choix = $aventuresManager->getChoix($id_mission);

	if($mission) {
		require('views/mission.php');
	} else {
		throw new Exception("La mission n'existe pas.");
		
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
	
	if ($logAdmin = $membresManager->adminAcces($compteAdmin)) {
		require('views/backend/adm.php');
	} else {
		header('Location: index.php?action=homelog');
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
		echo"<script type='text/javascript'> alert('Mot de passe ou Identifiant erroné(s).');</script>";
		header('Refresh: 0; url= index.php?action=login');
	}
	} 
	else {
		echo"<script> alert('Mot de passe ou Identifiant erroné(s).');</script>";
		header('Refresh: 0; url= index.php?action=login');
	}
}


function logout() {
	session_start();
	$_SESSION = array();
	session_destroy();

	setcookie('login','', time()-10);

	header('Location: index.php?action=accueil');
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