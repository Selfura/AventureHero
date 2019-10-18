<?php $title = "Personnage" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="user_card container">

			<div class="col-md-12 col-lg-12">
				<div class="text-center">
					<img class="img-center img-fluid avatar" src="public/images/heros/avatar1.jpg">
				</div>
			</div>

			<div class="col-md-12 col-lg-12 char_char">
				<p class="BD-nom">Nom :</p>
				<p class="BD-nom">Pouvoir :</p>
				<p class="BD-nom">Karma :</p>
				<p class="BD-nom">Age :</p>
				<p class="BD-nom">Sexe :</p>			
			</div>

	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>