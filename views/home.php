<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co">
			<div>
				<h1 class="text-center"> LES NEWS DE HERO AVENTURE</h1>
				<div class="padding-news">
					<h2 class="text-center">Titre de la News</h2>
					<p> Ici il y aura une news. La dernière News du site ! <br>
					Pour l'instant toutefois il n'y a pas grand chose était donné que le site est en construction. La phase de test n'est même pas encore commencée.
					Mais Cette page d'accueil commence à ressembler à quelque chose et c'est plaisant. Il y a toutefois de nombreuses pages à faire encore ! <br>
					Alors si par hasard vous tombez sur cette page, sachez qu'il s'agit là d'un projet personnel dans le cadre d'une formation de développeur Web.
					Le but est de faire un site, et aimant les jeux de rôles et le jeu vidéo en général, j'ai eu pour idée de faire ce jeu par navigateur. Mais vous êtes là un peu tôt, le site n'est pas encore fonctionnel. Bonne journée à vous !</p>
				</div>

				
			</div>
			<div class="vl"></div>
			<div class="home_log">
				<form class="connexion_home">
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
				</form>
					<button type="button" name="button" class="d-flex justify-content-center btn btn_home">Se connecter</button>
					<button type="button" name="button" class="d-flex justify-content-center btn btn_home">S'incrire</button>
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