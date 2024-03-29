<?php $title = "Inscription" ?>

<?php ob_start(); ?>



		<section id="login">
		<div class="d-flex justify-content-center">
			<div class="user_card">
				<div class=" justify-content-center form_container"><!-- Formulaire de création de compte -->
					<form method="POST" onSubmit="return validate()" action="index.php?action=inscriptionfini">
						<h2 class="text-center create-account">Creer un compte</h2>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="login" id="pseudo" class="form-control input_user" placeholder="Identifiant" required>
							<span id="erreur"></span>
		              		<span id="ok"></span>
							</div>
							
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="mdp" name="mdp" class="form-control input_pass" placeholder="Mot de passe" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="confirm_mdp" name="confirm_mdp" class="form-control input_pass" placeholder="Confirmation du mot de passe" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input class="form-control" type="email" placeholder="Email" name="mail" required>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button id ="signin"type="submit" name="inscription" class="btn login_btn" onclick="return(confirm('En cliquant sur Ok, votre compte sera créé ?'));">S'inscrire</button>
						</div>
					</form>
				</div>
				
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Déjà un compte ? <a href="index.php?action=login" class="ml-2">Se connecter</a>
					</div>
				</div>
			</div>
		</div>
		</section>

<!--<script src="public/js/disabled.js"></script>-->
<script src="public/js/ajaxmember.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>