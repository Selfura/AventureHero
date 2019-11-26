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
			<p> Pour savoir comment fonctionne aventure Hero, cliquez sur Captain Tuto</p>
		</div>

		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">1 / 4</div>
				<img class="img-center img-fluid" src="public/images/heros/city-superhero-vector.jpg" onclick="plusSlides(1)" alt="image Tutoriel">
				<div class="text">Cliquez sur Captain Tuto</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 4</div>
				<img class="img-center img-fluid" src="public/images/tuto1.jpg" onclick="plusSlides(1)"  alt="image Tutoriel">
				<div class="text">Inscrivez vous, puis connectez vous directement via la page d'accueil, ou via la page de connexion.</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 4</div> 
				<img class="img-center img-fluid" src="public/images/tuto2.jpg" onclick="plusSlides(1)"  alt="image Tutoriel">
				<div class="text">Cliquez sur l'image pour commencer le prologue !</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">4 / 4</div> 
				<img class="img-center img-fluid" src="public/images/tuto3.jpg" onclick="plusSlides(1)"  alt="image Tutoriel">
				<div class="text">Créez votre personnage, et voilà, vous êtes prêt pour commencer l'aventure !</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>

		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span> 
		</div>

	</div>
</section>



<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>