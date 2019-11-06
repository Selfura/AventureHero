<?php $title = "Aventure" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="aventure">
		<div class="prologue">
			<h2 class="selec-chap">Selectionnez un Chapitre</h2>
			<img class="img-center img-fluid" src="public/images/continuer_aventure.jpg">
		</div>
		<div class="container">
			<div class="chapitres d-flex justify-content-center">
				<div class="col-md-5 col-lg-3">
					<div class="img_chap">
						<a href="index.php?action=missions">
							<div class="portfolio-item-caption">
								<div class="portfolio-item-caption-content text-center text-white">
									<p>Chapitre 1</p>
								</div>
							</div>
						<img class="img-center img-fluid" src="public/images/Chapitre_1.jpg">
					</div></a>
				</div>
				<div class="col-md-5 col-lg-3">
					<div class="img_chap">
						<div class="portfolio-item-caption">
							<div class="portfolio-item-caption-content text-center text-white">
								<p>Chapitre 2</p>
							</div>
						</div>
						<img class="img-center img-fluid" src="public/images/Chapitre_2.jpg">
					</div>
				</div>
				<div class="col-md-5 col-lg-3">
					<div class="img_chap">
						<div class="portfolio-item-caption">
							<div class="portfolio-item-caption-content text-center text-white">
								<p>Chapitre 3</p>
							</div>
						</div>
						<img class="img-center img-fluid" src="public/images/Chapitre_3.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>