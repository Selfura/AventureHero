<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co">
			
			<div>
				<h1 class="text-center"> LES NEWS DE HERO AVENTURE</h1>
				<div class="padding-news">
			<?php

					while ($donnees = $lastNews->fetch())
				{
			?>
					<h2 class="text-center"><?= htmlspecialchars($donnees['titre']); ?></h2>
					<p> <?= substr(($donnees['annonce']), 0, 800).'...'; ?></p>
					<p><?= $donnees['date_creation_fr']; ?></p>
				</div>
			<?php
				} 
				$lastNews->closeCursor();
			?>

				
			</div>
			<div class="vl"></div>
			<div class="home_log">
				<form class="connexion_home" action="index.php?action=log" method="POST" autocomplete="off">
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
					<button type="submit" name="connexion" class="btn login_btn">Se connecter</button>
				</form>
					<a href="index.php?action=inscription"><button type="submit" name="inscription" class="btn login_btn">S'inscrire</button></a>
			</div>
		</div>

		<div class="home_tuto">
			<p> Pour savoir comment fonctionne aventure Hero, appuyez sur Captain Tuto</p>
			<img class="img-center img-fluid" src="public/images/heros/city-superhero-vector.jpg">
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>