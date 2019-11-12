<?php $title = "Création de Personnage" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="user_card container">
		<form method="post" action="index.php?action=createPerso">
			<div class="col-md-12 col-lg-12">
				<div class="text-center">
					
					<p>
						Choisissez l'avatar de votre personnage :<br />
						<div class="d-flex">
							<?php


							while ($donnees = $avatar->fetch())
							{
							?>
							<div>
								<input type="radio" name="Avatar" value="<?= $donnees['avatar']; ?>" />
								<div class=" choix-ava">
									<label for="1"><img class="img-center img-fluid avatar" src="<?= $donnees['avatar']; ?>"/></label>
								</div>
							</div>
							<?php
							} // Fin de la boucle des billets
							$avatar->closeCursor();
							?>
      					</div>
  					</p>
  					

				</div>
			</div>
			<br>

			<div class="col-md-12 col-lg-12 char_char">
				<div>
					<p class="d-flex BD-nom"><input type="text" name="Nom" class="form-control input_user" placeholder="Nom" required></p>
				</div>
				<p class="d-flex BD-nom">
					<label>Pouvoir</label>
					<select name="Pouvoir" class="case-crea" value="Pouvoir">
						<option value=" " >Votre Pouvoir</option>
						<option>Elementaire</option>
						<option>Esprit</option>
						<option>Force</option>
						<option>Mystique</option>
					</select>
				</p>
				<p class="d-flex BD-nom"><input type="number" name="Age" class="form-control input_user" placeholder="Age" required></p>
				<p class="d-flex BD-nom">
					<label>Sexe</label>
					<select name="Sexe" class="case-crea">
						<option value=" " >Votre Sexe</option>
						<option>Feminin</option>
						<option>Masculin</option>
					</select>
				</p>
			</div>
			<a class="cent" href="index.php?action=accueil"><button type="submit" name="Envoyer" class="btn login_btn">Créer le personnage</button></a>
		<form>
		<p id="caution">Attention, une fois le personnage créé, ces informations ne peuvent être changées.</p>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>