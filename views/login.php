<?php $title = "Connexion" ?>

<?php ob_start(); ?>



		<section id="login">
		<div class="d-flex justify-content-center">
			<div class="user_card">
				<div class=" justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="Identifiant">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="Mot de passe">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Se Souvenir de Moi</label>
							</div>
						</div>
					</form>
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="button" name="button" class="btn login_btn">Se connecter</button>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Pas de compte ? <a href="#" class="ml-2">Inscriptions</a>
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