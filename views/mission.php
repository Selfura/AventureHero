<?php $title = "Choix de Mission" ?>

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
					<img class="img-center img-fluid" src="public/images/<?= $mission['image']; ?>" alt="image mission">
				</div>
			</div>
			<div class="block_mission">
				<h1 class="text-center"><?= $mission['nom']; ?></h1>
				<p><?= $mission['texte']; ?> </p>
			</div>
			<!-- Reprendre les actions possibles via la mission (précédent, retour), pour permettre d'annuler ou confirmer le karma gagné/perdu. Eviter aux membres d'avoir plus de karma que permis par les missions -->
			<?php

					while ($donnees = $choix->fetch())
				{
					$_SESSION["actionsPossibles"][] = array("choix" => $donnees['id'], "renvoi" => $donnees['id_renvoi']);
			?>
			<div class="d-flex justify-content-center mt-3 login_container">
				<a href="index.php?action=choix&amp;id=<?= $donnees['id'] ?>&amp;missionId=<?= $donnees['id_renvoi'] ?>" class="cent"><button type="button" name="button" class="btn login_btn btn_prologue"><?= $donnees['texte']; ?></button></a>
			</div>
			<?php
				} // Fin de la boucle
				$choix->closeCursor();
			?>
			</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>