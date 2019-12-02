<?php $title = "News" ?>

<?php ob_start(); ?>




<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co">
			<div class="padding-news">
				<h1 class="text-center"> LES NEWS DE HERO AVENTURE</h1>
				<?php

					while ($donnees = $news->fetch())
				{
				?>
				<h2 class="text-center"> <?= htmlspecialchars($donnees['titre']); ?></h2>
				<div> <?= (($donnees['annonce'])); ?></div>
				<p><?= $donnees['date_creation_fr']; ?></p>
				<?php
				} 
				$news->closeCursor();
				?>
				
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>