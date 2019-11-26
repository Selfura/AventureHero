<?php $title = "Inscription" ?>

<?php ob_start(); ?>



		<section id="login">
		<div class="d-flex justify-content-center">
			<div class="user_card">
				<div class=" justify-content-center form_container">
					<form method="POST" onSubmit="return validate()">
						<h2 class="text-center create-account">Creer un compte</h2>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" placeholder="Identifiant" required>
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
							<button type="button" name="inscription" class="btn login_btn">S'inscrire</button>
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

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>