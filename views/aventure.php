<?php $title = "Aventure" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="aventure">
		<div class="prologue">
			<h2 class="selec-chap img-fluid">Selectionnez un Chapitre</h2>
			<img class="img-center img-fluid" src="public/images/continuer_aventure.jpg">
		</div>
		<div class="container">
			<div class="chapitres d-flex justify-content-center">
				<?php


				while ($donnees = $chapitres->fetch())
				{
				?>
				<div class="col-md-5 col-lg-3">
					<div class="img_chap">
						<a href="index.php?action=missions&amp;id=<?= $donnees['id'] ?>">
							<div class="portfolio-item-caption img-fluid">
								<div class="portfolio-item-caption-content text-center text_color">
									<h2>Chapitre <?= $donnees['numero']; ?></h2>
									<p><?= $donnees['nom']; ?></p>
								</div>
							</div>
						<img class="img-center img-fluid" src="<?= $donnees['image']; ?>">
					</div></a>
				</div>
				<?php
				} // Fin de la boucle
				$chapitres->closeCursor();
				?>
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>