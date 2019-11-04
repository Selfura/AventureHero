<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<!--<link rel="stylesheet" href="public/bootstrap/bootstrap.min.css" />
		//<link rel="stylesheet" href="public/css/bootstrap.css"/>-->
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- Bootstrap itself -->
		<link rel="stylesheet" href="style.css" />

		<title> Site En construction</title>

		<meta name="description" content="Site en Construction">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Open Graph data -->
		<meta property="og:title" content=""/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://yoank.fr/"/>
		<meta property="og:image" content="images/....jpg"/>
		<meta property="og:description" content=""/>
		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@jeanForteroch">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<!-- Twitter Summary card images must be at least 200x200px -->
		<meta name="twitter:image" content="images/....jpg">

		<!-- Favicons -->
		<link rel="shortcut icon" href="images/....jpg">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<script src="public/js/tinymce/tinymce.min.js"></script>
		<script>tinymce.init({selector:'.tinymce', language: 'fr_FR'});</script>

	</head>
	<body>

		<?php
		require ("views/nav_deco.php");
		?>
		<div class="d-flex justify-content-center">
		<a href="index.php?action=accueilback"><img src="public/images/logo.png" class="img-responsive logo img-fluid"></img></a>
		</div>


		<?= $content ?>


		<?php
		require ("views/footer.php");
		?>
		<script src="public/js/validate.js"></script>
		<script src="public/js/adm_menu.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	</body>
</html>