<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co">
			<div class=" home_news">
				<div class="home_tuto">
					<p> Commencer le prologue / continuer la mission</p>
					<img class="img-center img-fluid" src="public/images/continuer_aventure.jpg">
				</div>

				
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>