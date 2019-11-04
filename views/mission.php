<?php $title = "Choix de Mission" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="aventure">
		<div class="container justify-content-center">
			<div class="missions">
				<div class="img_mission">
					<div class="mission-item-caption">
						<div class="portfolio-item-caption-content text-center text-white">
							<p>Mission 1</p>
						</div>
					</div>
					<img class="img-center img-fluid" src="public/images/mission_1.jpg">
				</div>
			</div>
			<div class="block_mission">
				<h1 class="text-center">Titre de la mission</h1>
				<p>Homeoparty, un vilain qui tente de se faire une place dans le monde des vilains, bien que les méchants professionnel le considère comme étant une fraude, est devenu fou après avoir vu un jeune pharmacien du Limousin critiquer l'homeopathie, son produit de cœur !
				Il a donc décidé d'envahir le Limousin pour en faire ce qu'il appelle « L'homeopatrie. »

				Vous arrivez dans une petite ville de Corèze, un homme un peu mou avec des lunettes, ponctuant toutes ses phrases par « égné » vous accueille, nous l'appellerons François. Il vous annonce qu'un vil sacripan saccage les pharmacies de la ville à la recherche d'un certain Pharmacien. Mais comme ses recherches sont non concluantes, il ne le trouve pas. </p>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" class="btn login_btn btn_prologue">Vous partez à la recherche du vilain.</button>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" class="btn login_btn btn_prologue">Vous discutez avec ce François, il vous rappelle vaguement quelqu'un, mais qui ?</button>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" class="btn login_btn btn_prologue">Vous vous dites que finalement, l'homéopathie c'est pas si mal et vous retournez chez vous.</button>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" class="btn login_btn btn_prologue">Vous êtes à fond pour l'homéopathie et vous cherchez vous aussi cet  enquiquineur de pharmacien.</button>
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>