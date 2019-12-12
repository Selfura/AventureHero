<?php $title = "Aventure" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="aventure">
		<div class="container">
			<div class="chapitres d-flex justify-content-center">

				<div class="col-md-8 col-lg-8">
					<a href="index.php?action=mission&amp;id=<?= $missions['id'] ?>">
						<div class="text-center img_chap">		
							<h2 class="text-center selec-chap img-fluid">Cliquez pour continuer</h2>				
							<img class="img-center img-fluid border-img" src="public/images/boldsuperhero.jpg">
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>