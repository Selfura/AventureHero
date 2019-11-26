<?php $title = "Classement" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<h2 class="text-center">Classement des joueurs</h2>

		<div class="container justify-content-center">
		      <div class="table-responsive">
		        <table class="table table-bordered text-center">
		          <thead>
		            <tr>
		              <th>Avatar</th>
		              <th>Classes</th>
		              <th>Nom du Personnages</th>
		              <th>Nombre de Points</th>
		            </tr>
		          </thead>
		          <tbody >
		          	<?php


					while ($donnees = $personnages->fetch())
					{
					?>
		            <tr>

		            	<td>
			              	<div>
								<img class="img-center img-fluid rank_avatar" src="<?= $donnees['Avatar']; ?>">
							</div>
						</td>
		            	<td><?= $donnees['Pouvoir']; ?></td>
		            	<td><?= $donnees['Nom']; ?></td>
		            	<td><?= $donnees['Karma']; ?></td>
		            </tr>
		            <?php
					} // Fin de la boucle des missions
					$personnages->closeCursor();
					?>
		          </tbody>
		        </table>
		      </div><!--end of .table-responsive-->
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>