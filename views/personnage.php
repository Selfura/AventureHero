<?php $title = "Personnage" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="user_card container">

			<div class="col-md-12 col-lg-12">
				<div class="text-center">
					<img class="img-center img-fluid avatar" src="public/images/heros/<?= $donnees['Avatar']; ?>.jpg">
				</div>
			</div>

			<div class="col-md-12 col-lg-12 char_char">
				<p class="BD-nom">Nom : <?= $donnees['Nom']; ?></p>
				<p class="BD-nom">Pouvoir : <?= $donnees['Pouvoir']; ?></p>
				<p class="BD-nom">Karma : <?= $donnees['Karma']; ?></p>
				<p class="BD-nom">Age : <?= $donnees['Age']; ?></p>
				<p class="BD-nom">Sexe : <?= $donnees['Sexe']; ?></p>		
			</div>

	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>