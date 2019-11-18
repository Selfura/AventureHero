<?php $title = "Suite de la Mission" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="aventure">
		<div class="container justify-content-center">
			<div class="missions">
				<div class="img_mission">
					<div class="mission-item-caption">
						<div class="portfolio-item-caption-content text-center text-white">
							<p>Mission 1</p>
						</div>
					</div>
					<img class="img-center img-fluid" src="public/images/mission_1.jpg">
				</div>
			</div>
			<div class="block_mission">
				<h1 class="text-center"><?= $donnees['nom']; ?></h1>
				<p><?= $donnees['texte']; ?> </p>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<a href="index.php?action=fin" class="cent"><button type="button" name="button" class="btn login_btn btn_prologue"><?= $donnees['choix1']; ?></button></a>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<a href="index.php?action=fin" class="cent"><button type="button" name="button" class="btn login_btn btn_prologue"><?= $donnees['choix2']; ?></button></a>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<a href="index.php?action=fin" class="cent"><button type="button" name="button" class="btn login_btn btn_prologue"><?= $donnees['choix3']; ?></button></a>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<a href="index.php?action=fin"class="cent"><button type="button" name="button" class="btn login_btn btn_prologue"><?= $donnees['choix4']; ?></button></a>
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>