<?php $title = "Personnage" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co">
			<div>
				<img class="img-center img-fluid" src="public/images/heros/avatar1.jpg">
			</div>

			<div class=" home_news">
				<p>Nom du Perso :</p>
				<p>Pouvoir :</p>
				<p>Karma :</p>
				<p>Age :</p>
				<p>Sexe :</p>			
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>