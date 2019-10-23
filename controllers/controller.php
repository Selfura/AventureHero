<?php 

require("models/manager.php");
require("models/membresManager.php");
require("models/newsManager.php");

use Aventurehero\models\MembresManager;
use Aventurehero\models\NewsManager;
use Aventurehero\models\AventuresManager;

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
function homelog() {
	$newsManager = new NewsManager();
	$lastNews = $newsManager->getLastNews();
	require('views/accueilco.php');
}
function rank() {
	require('views/rank.php');
}
function contact() {
	require('views/contact.php');
}
function aventure() {
	require('views/aventure.php');
}
function missions() {
	require('views/missions.php');
}
function aide() {
	require('views/aide.php');
}
function personnage() {
	require('views/personnage.php');
}
function mission() {
	require('views/mission.php');
}
function adm() {

	require('views/backend/adm.php');
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
			setcookie('login', $login, time() + 1800, null, null, false, true);

			header('Location: ../aventurehero/index.php?action=homelog');
		} else {
		echo "Mot de passe ou Identifiant erroné(s). 
			</br>
			<a href='index.php?action=accueil'> Retour au site </a>";
	}
	} 
	else {
		echo "Mot de passe ou Identifiant erroné(s). 
			</br>
			<a href='index.php?action=accueil'> Retour au site </a>";
	}
}


function logout() {
	session_start();
	$_SESSION = array();
	session_destroy();

	setcookie('login','', time()-10);

	header('Location: ../aventurehero/index.php?action=accueil');
}


/************* ANNONCES ***************** 

*************		    *******************/
//Creation d'annonce
function newNews($titre, $annonce) {

	session_start();
	$newsManager = new NewsManager();

    $createNews = $newsManager->createNews($title, $content);
	header('Location: ../aventurehero/index.php?action=adm');
}
//Lecture des Annonces

function news()
{	
	$newsManager = new NewsManager();
	$lastNews = $newsManager->getLastNews();
	$news = $newsManager->getNews();

	require('views/news.php');
}
