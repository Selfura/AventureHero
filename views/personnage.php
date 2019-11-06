<?php $title = "Personnage" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="user_card container">

			<div class="col-md-12 col-lg-12">
				<div class="text-center">
					<img class="img-center img-fluid avatar" src="public/images/heros/<?= $char['Avatar']; ?>.jpg">
				</div>
			</div>

			<div class="col-md-12 col-lg-12 char_char">
				<p class="BD-nom">Nom : <?= $char['Nom']; ?></p>
				<p class="BD-nom">Pouvoir : <?= $char['Pouvoir']; ?></p>
				<p class="BD-nom">Karma : <?= $char['Karma']; ?></p>
				<p class="BD-nom">Age : <?= $char['Age']; ?></p>
				<p class="BD-nom">Sexe : <?= $char['Sexe']; ?></p>		
			</div>

	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>