<?php $title = "Inscription" ?>

<?php ob_start(); ?>



		<section id="login">
		<div class="d-flex justify-content-center">
			<div class="user_card">
				<div class=" justify-content-center form_container">
					<form>
						<h2 class="text-center create-account">Créer un compte</h2>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="Identifiant">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="Mot de passe">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="Valider le mot de passe">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input class="form-control" type="email" placeholder="Email" name="mail" required>
						</div>
					</form>
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="button" name="button" class="btn login_btn">S'inscrire</button>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Déjà un compte ? <a href="#" class="ml-2">Se connecter</a>
					</div>
				</div>
			</div>
		</div>
		</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>