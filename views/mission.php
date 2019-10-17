<?php $title = "Choix de Mission" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="aventure">
		<div class="container justify-content-center">
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
						<div class="img_mission">
							<div class="mission-item-caption">
								<div class="portfolio-item-caption-content text-center text-white">
									<p>Mission 1</p>
								</div>
							</div>
							<img class="img-center img-fluid" src="public/images/mission_1.jpg">
						</div>
						<div class="img_mission">
							<div class="mission-item-caption">
								<div class="portfolio-item-caption-content text-center text-white">
									<p>Mission 2</p>
								</div>
							</div>
							<img class="img-center img-fluid" src="public/images/mission_2.jpg">
						</div>


						<div class="img_mission">
							<div class="mission-item-caption">
								<div class="portfolio-item-caption-content text-center text-white">
									<p>Mission 3</p>
								</div>
							</div>
							<img class="img-center img-fluid" src="public/images/mission_3.jpg">
						</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>