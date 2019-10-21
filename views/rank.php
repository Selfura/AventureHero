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
		            <tr>
		            	<td>
			              	<div>
								<img class="img-center img-fluid rank_avatar" src="public/images/heros/avatar1.jpg">
							</div>
						</td>
		            	<td>Mystique/Force/Esprit/Elementaire</td>
		            	<td>Jean Hubert Spitz</td>
		            	<td>666</td>
		            </tr>
		          </tbody>
		        </table>
		      </div><!--end of .table-responsive-->
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>