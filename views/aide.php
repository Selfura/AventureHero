<?php $title = "Aide" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co justify-content-center">
			<div class=" home_news ">
				<h1 class="text-center"> Vous avez besoin d'aide ?</h1>			
			</div>
		</div>

		<div class="home_tuto">
			<p> Pour savoir comment fonctionne aventure Hero, appuyez sur Captain Tuto</p>
			<img class="img-center img-fluid" src="public/images/heros/city-superhero-vector.jpg">
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>