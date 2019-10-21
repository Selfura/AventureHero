<?php $title = "News" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co">
			<div class="padding-news">
				<h1 class="text-center"> LES NEWS DE HERO AVENTURE</h1>
				<h2 class="text-center"> Dernier Article</h2>
				<p> Ici il y aura une news. La dernière News du site ! <br>
				Pour l'instant toutefois il n'y a pas grand chose était donné que le site est en construction. La phase de test n'est même pas encore commencée.
				Mais Cette page d'accueil commence à ressembler à quelque chose et c'est plaisant. Il y a toutefois de nombreuses pages à faire encore ! <br><br>
				Alors si par hasard vous tombez sur cette page, sachez qu'il s'agit là d'un projet personnel dans le cadre d'une formation de développeur Web.
				Le but est de faire un site, et aimant les jeux de rôles et le jeu vidéo en général, j'ai eu pour idée de faire ce jeu par navigateur. Mais vous êtes là un peu tôt, le site n'est pas encore fonctionnel. Bonne journée à vous !</p>

				<h2 class="text-center">Anciens Articles</h2>
				<p> Ici il y aura une news. La dernière News du site ! <br>
				Pour l'instant toutefois il n'y a pas grand chose était donné que le site est en construction. La phase de test n'est même pas encore commencée.
				Mais Cette page d'accueil commence à ressembler à quelque chose et c'est plaisant. Il y a toutefois de nombreuses pages à faire encore ! <br><br>
				Alors si par hasard vous tombez sur cette page, sachez qu'il s'agit là d'un projet personnel dans le cadre d'une formation de développeur Web.
				Le but est de faire un site, et aimant les jeux de rôles et le jeu vidéo en général, j'ai eu pour idée de faire ce jeu par navigateur. Mais vous êtes là un peu tôt, le site n'est pas encore fonctionnel. Bonne journée à vous !</p>

				
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>