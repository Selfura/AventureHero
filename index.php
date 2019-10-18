<?php

require('controllers/controller.php');

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
			homelog();
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
			aventure();
			break;

		case 'missions' :
			missions();
			break;

		case 'mission' :
			mission();
			break;

		case 'aide' :
			aide();
			break;

		case 'personnage' :
			personnage();
			break;

		case 'adm' :
			adm();
			break;

	}
}
else{
		home();
	}