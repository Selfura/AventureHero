<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co justify-content-center">
			<p> Bienvenue sur ta page Administrateur, c'est ici que tu gèreras les nouvelles missions, les annonces et la gestion des membres.</p>
		</div>
		<nav class="adm_menu">
			<ul class="tab-group" role="menu">
				<li><a href="#newchap" class="active">Nouveau Chapitre</a></li>
				<li><a href="#mission_s">Nouvelles Missions</a></li>
				<li><a href="#choix">Nouveaux Choix</a></li>
				<li><a href="#annonce">Annonce</a></li>
				<li><a href="#membres">Membres</a></li>
			</ul>
		</nav>


		<div class="container section" id="newchap" style="display:block;">
			<div class="col-md-12 col-lg-12 col-md-offset-1 col-lg-offset-1 text-center">	


				<h1 class="title">Creer un Nouveau Chapitre</h1>

				<!-- Short introductory (optional) -->
				<form method="POST" action="index.php?action=newChap" enctype="multipart/form-data">
					<input type="text" name="nom" class="form-control nomchap" value="" placeholder="Nom du Chapitre" required>
					<input class="form-control numchap" type="text" placeholder="Numero du Chapitre" name="num" required>
					<input type="hidden" name="MAX_FILE_SIZE" value="400000">
					Image du Chapitre : <input type="file" name="picture" required>
					<button type="submit" name="Envoyer" class="btn login_btn">Envoyer</button>

				</form>


			</div> <!-- /col -->
		</div> <!-- /row -->	
		
		<div class="container section" id="mission_s"  style="display:none;">
			<div class="col-md-12 col-lg-12 col-md-offset-1 col-lg-offset-1 text-center">		
				<br>
				<h2 class="text-center title">Nouvelles Missions</h2>


				<form method="POST" action="index.php?action=newMission" enctype="multipart/form-data">
					<input class="form-control nommission" type="text" placeholder="Nom de la mission" name="nom_mission" required>
					<input class="form-control chapnum" type="text" placeholder="Chapitre lié à la mission" name="chap_mission" required>
					<input class="form-control lvlmission" type="text" placeholder="Niveau de la mission" name="lvl_mission" required>
					<input type="hidden" name="MAX_FILE_SIZE" value="400000">
					Image de la mission : <input type="file" name="image" required>

				
					<p> Spitch de la mission </p>
					<textarea placeholder="Entrez votre message ici..." class="form-control tinymce" rows="7" name="content"></textarea>

					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" name="button" class="btn login_btn">Envoyer</button>
					</div>
				</form>



			</div> <!-- /col -->
		</div> <!-- /row -->	

		<div class="container section" id="choix"  style="display:none;">
			<div class="col-md-12 col-lg-12 col-md-offset-1 col-lg-offset-1 text-center">		
				<br>
				<h2 class="text-center title">Nouveaux Choix</h2>
					<select name="missions">
						<?php
						while ($donnees = $allMissions->fetch())
						{
						?>		
						
							<option value=""><?= $donnees['id']. " : " .  $donnees['nom'];?></option>

						
						<?php
						} // Fin de la boucle des billets
						$allMissions->closeCursor();
						?>
						</SELECT>

				<form method="POST" action="index.php?action=newChoix">
					<div class="divchoix">
						<input type="text" name="id_mission" class="form-choice nummission"  value="" placeholder="id mission" required>
						<input type="text" name="choix" class="form-choice choix" value="" placeholder="Choix 1" required>
						<input type="text" name="id_renvoi" class="form-choice nummission" value="" placeholder="id renvoi" required>
						<input type="text" name="karma" class="form-choice nummission" value="" placeholder="karma" required>
					</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" name="button" class="btn login_btn">Envoyer</button>
					</div>
				</form>



			</div> <!-- /col -->
		</div> <!-- /row -->	

	


		<div class="container section" id="annonce"  style="display:none;">
	
			<h2 class="text-center title">Nouvelle Annonce</h2>
			<div class="row">
				<div class="col-sm-12">  
					<form method="POST" action="index.php?action=newNews">  
						<input type="text" name="titre" class="form-control titleannonce" value="" placeholder="Titre de l'annonce" required>
						<textarea placeholder="Entrez la News ici..." class="form-control tinymce titleannonce" rows="7" name="annonce"></textarea>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" class="btn login_btn">Envoyer</button>
						</div>
					</form>
				</div>
			</div>


		</div>


		<div class="container section" id="membres"  style="display:none;">
		
			<h2 class="text-center title">Membres</h2>
			<div class="table-responsive">
		        <table class="table table-bordered text-center">
		          <thead>
		            <tr>
		              <th>Nom des Membres</th>
		              <th>Nom du Personnage</th>
		              <th>Supprimer le Membre</th>
		            </tr>
		          </thead>

		            	<?php

						while ($donnees = $membres->fetch())
						{
						?>	
		          <tbody >
		            <tr>


		            	<td><?= $donnees['login']; ?></td>
		            	<td><?= $donnees['login']; ?></td>
		            	<td>
						<a class="btn login_btn" href="index.php?action=deleteMembre&amp;id=<?= $donnees['id'] ?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ce membre ?'));" >Supprimer</a>
						</td>

		            </tr>
		          </tbody>
		          
						<?php
						} // Fin de la boucle des billets
						$membres->closeCursor();
						?>
		        </table>
		     </div><!--end of .table-responsive-->


		</div>


	</div>
</section>




<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>