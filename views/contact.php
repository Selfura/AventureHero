<?php $title = "Contact" ?>

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
							<input type="text" name="" class="form-control" value="" placeholder="Nom">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input class="form-control" type="email" placeholder="Email" name="mail" required>
						</div>
						<textarea placeholder="Entrez votre message ici..." class="form-control" rows="7" name="message" required></textarea>
					</form>
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="button" name="button" class="btn login_btn">Envoyer</button>
				</div>
				</div>
			</div>
		</div>
		</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>