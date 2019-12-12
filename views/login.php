<?php $title = "Connexion" ?>

<?php ob_start(); ?>

		

		<section id="login">
		<div class="d-flex justify-content-center">
			<div class="user_card">
				<div class=" justify-content-center form_container">
					<form action="index.php?action=log" method="POST" autocomplete="off">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="login" class="form-control input_user" value="" placeholder="Identifiant">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Mot de passe">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="connexion" class="btn login_btn">Se connecter</button>
						</div>
					</form>
				</div>
				
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Pas de compte ? <a href="index.php?action=inscription" class="ml-2">S'inscrire</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Mot de passe Oublié ?</a>
					</div>
				</div>
			</div>
		</div>
		</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>