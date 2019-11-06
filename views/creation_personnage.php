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
							<div>
								<input type="radio" name="Avatar" value="1" id="avatar1" />
								<div class=" choix-ava">
									<label for="1"><img class="img-center img-fluid avatar" src="<?= $avatar['avatar']; ?>"/></label>
								</div>
							</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar2" id="avatar2" />

	      						<div class=" choix-ava">
	      							<label for="avatar2"><img class="img-center img-fluid avatar" src="public/images/heros/avatar2.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar3" id="avatar3" />
	      						<div class=" choix-ava">
	      							<label for="avatar3"><img class="img-center img-fluid avatar" src="public/images/heros/avatar3.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar4" id="avatar4" /> 
	      						<div class=" choix-ava">
	      							<label for="avatar4"><img class="img-center img-fluid avatar" src="public/images/heros/avatar4.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar5" id="avatar5" /> 
	      						<div class=" choix-ava">
	      							<label for="avatar5"><img class="img-center img-fluid avatar" src="public/images/heros/avatar5.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar6" id="avatar6" />
	      						<div class=" choix-ava">
	      							<label for="avatar6"><img class="img-center img-fluid avatar" src="public/images/heros/avatar6.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar7" id="avatar7" />
	      						<div class=" choix-ava">
	      							<label for="avatar7"><img class="img-center img-fluid avatar" src="public/images/heros/avatar7.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar8" id="avatar8" />
	      						<div class=" choix-ava">
	      						<label for="avatar8"><img class="img-center img-fluid avatar" src="public/images/heros/avatar8.jpg"/></label>
	      						 </div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar9" id="avatar9" />
	      						<div class=" choix-ava">
	      							<label for="avatar9"><img class="img-center img-fluid avatar" src="public/images/heros/avatar9.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar10" id="avatar10" />
	      						<div class=" choix-ava">
	      							<label for="avatar10"><img class="img-center img-fluid avatar" src="public/images/heros/avatar10.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar12" id="avatar11" />
	      						<div class=" choix-ava">
	      							<label for="avatar11"><img class="img-center img-fluid avatar" src="public/images/heros/avatar11.jpg"/></label>
	      						</div>
	      					</div>
	      					<div>
	      						<input type="radio" name="Avatar" value="avatar12" id="avatar12" />
	      						<div class=" choix-ava">
	      							<label for="avatar12"><img class="img-center img-fluid avatar" src="public/images/heros/avatar12.jpg"/></label>
	      						</div>
	      					</div>
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