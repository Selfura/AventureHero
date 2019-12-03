<?php $title = "Choix de Mission" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="aventure">
		<div class="container justify-content-center">
			<h1 class="text-center">Choisir une mission</h1>
			<br>
			<div class="missions ">
				<div class="chapitre d-flex">
						<div class="img_chap">
							<div class="portfolio-item-caption">
								<div class="portfolio-item-caption-content text-center text-white">
									<p>Chapitre 1</p>
								</div>
							</div>
							<img class="img-center img-fluid" src="public/images/Chapitre_1.jpg">
						</div>
					</div>
				<div class="missions_choice">
					<?php
					

					while ($donnees = $missions->fetch())
					{
					?>
						<a href="index.php?action=mission&amp;id=<?= $donnees['id'] ?>">
							<div class="img_mission">
								<div class="mission-item-caption">
									<div class="portfolio-item-caption-content text-center text-white">
										<p class="text-center"><?= $donnees['nom']; ?></p>
									</div>
								</div>
								<img class="img-center img-fluid" src="<?= $donnees['image']; ?>">
							</div>
						</a>
					<?php
					} // Fin de la boucle des missions
					$missions->closeCursor();
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>