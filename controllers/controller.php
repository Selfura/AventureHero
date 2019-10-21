<?php 

require("models/manager.php");
require("models/adminManager.php");

use Jeanforteroche\models\AdminManager;

function home() {
	require('views/home.php');
}

function login() {
	require('views/login.php');
}

function incription() {
	require('views/inscription.php');
}
function homelog() {
	require('views/accueilco.php');
}
function news() {
	require('views/news.php');
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


function admin($login)
{	

	$adminManager = new AdminManager();
	$log = $adminManager->getLogin($login);

	if ($_POST['login'] == $log['login']) {

		$login = $log['login'];

		if(password_verify($_POST['pw'], $log['pw'])) {

			$_SESSION['login'] = $log['login'];
		
			require('views/backend/adm.php');
		} else {
		echo "Mot de passe ou Identifiant erroné(s). 
			</br>
			<a href='../jeanforteroche/index.php?action=accueil'> Retour au site </a>";
	}
	} 
	else {
		echo "Mot de passe ou Identifiant erroné(s). 
			</br>
			<a href='../jeanforteroche/index.php?action=accueil'> Retour au site </a>";
	}
}

