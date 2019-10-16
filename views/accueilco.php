<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co">
			<div class=" home_news">
				<h1 class="text-center"> Bienvenue à toi Hero ! (si Karma supérieur = Super hero, sinon Vilain. Ou féminin si perso féminin.)</h1>
				<p> Après la découverte secrète du gouvernement chinois d'un sérum capable de créer des surhommes au sein de son armée, il ne restait plus qu'à effectuer une phase de test afin d'avoir quelques sujets à examiner. Toutefois, tout ne se passa pas comme prévu. A la veille de tests de plus grande ampleur, la substance disparue.<br><br>

				La Chine voulait accuser les États-Unis, ainsi que le Japon, deux de ses ennemis sur la scène mondiale, toutefois ils ne pouvaient le faire au risque d'ébruiter la création du sérum. De plus, ils n'avaient aucune preuve et accuser un pays à tort risquait de tout dévoiler.<br><br>

				Bien sûr, il ne restait plus qu'à recommencer le procédé pour l'Empire Céleste, mais le scientifique ayant fait la découverte avait disparu, avec toutes ses notes... il ne restait donc plus grand chose à se mettre sur la dent, à part la mémoire des autres scientifiques du projet, mais cela prendrait plus de temps.<br><br>


				Après quelques années de silence sur le sujet, une explosion retentit dans une usine désaffectée d'un pays d'Europe de l'Est. D'un endroit sensé être désert se dégagea une épaisse fumée qui commença à se disperser dans les airs fit ainsi le tour du monde dans un état totalement invisible. Les premiers lanceurs d'alertes parlaient d'un événement aussi dangereux que Tchernobyl et que de toute autre explosion d'Usine Seveso. Car contrairement à toutes ces catastrophes, les activités de cette usine d'où rien ne fuitait à part des quantités de gaz impressionnantes, on ne savait pas ce qu'il y avait dans cette fumée. Des tests de radiations furent effectués mais furent non concluants.<br><br>

				Puis vient le temps où plusieurs personnes à travers le monde contractaient différents symptomes très étranges. Certains possédaient une force décuplée, d'autres pouvaient manier les éléments, certains pouvait utiliser la télékinésie, et d'autres encore avaient développé des pouvoirs difficilement explicables qu'ils furent catégorisés en tant que mystiques. <br><br>

				L'esprit humain étant ce qu'il est, et ce malgré la phrase d'oncle Ben dans le premier Spiderman de Sam Raimi, « Un grand pouvoir amène de grandes responsabilités », le nombre de personne voulait utiliser leurs pouvoirs pour l'apport personnel est plus nombreux que les gens vertueux souhaitant le bien.
				</p>

				
			</div>
		</div>
		<div class="home_tuto">
			<p> Commencer le prologue / continuer la mission</p>
			<img class="img-center img-fluid" src="public/images/continuer_aventure.jpg">
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>