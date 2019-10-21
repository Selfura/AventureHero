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
				<li><a href="#mission_s">Nouvelle Mission</a></li>
				<li><a href="#annonce">Annonce</a></li>
				<li><a href="#membres">Membres</a></li>
			</ul>
		</nav>


		<div class="container section" id="newchap">
			<div class="col-md-12 col-lg-12 col-md-offset-1 col-lg-offset-1 text-center">	

				<!-- Site Title, your name, HELLO msg, etc. -->
				<h1 class="title">Créer un Nouveau Chapitre</h1>

				<!-- Short introductory (optional) -->
				<form>
					<input type="text" name="Nom_chap" class="form-control" value="" placeholder="Nom du Chapitre" required>
					<input class="form-control" type="text" placeholder="Numero du Chapitre" name="Numero du Chapitre" required>
					<input type="hidden" name="MAX_FILE_SIZE" value="400000">
					Image du Chapitre : <input type="file" name="picture" required>
					<input type="hidden" name="MAX_FILE_SIZE" value="400000">
					Image Grisée : <input type="file" name="picture" required>

				</form>


			</div> <!-- /col -->
		</div> <!-- /row -->	
		
		<div class="container section" id="mission_s">
			<div class="col-md-12 col-lg-12 col-md-offset-1 col-lg-offset-1 text-center">		
				<br>
				<form>
					<input type="text" name="numero_mission" class="form-control" value="" placeholder="Numero de la mission" required>
					<input class="form-control" type="text" placeholder="Nom de la mission" name="name_mission" required>
					<input class="form-control" type="text" placeholder="Chapitre lié à la mission" name="chap_mission" required>
					<input type="hidden" name="MAX_FILE_SIZE" value="400000">
					Image de la mission : <input type="file" name="picture" required>
					<input type="hidden" name="MAX_FILE_SIZE" value="400000">
					Image Grisée : <input type="file" name="picture" required>

				
					<p> Spitch de la mission </p>
					<textarea placeholder="Entrez votre message ici..." class="form-control tinymce" rows="7" name="message" required></textarea>

					<input type="text" name="choix1" class="form-control" value="" placeholder="Choix 1">
					<input type="text" name="choix2" class="form-control" value="" placeholder="Choix 2">
					<input type="text" name="choix3" class="form-control" value="" placeholder="Choix 3">
					<input type="text" name="choix4" class="form-control" value="" placeholder="Choix 4">
					<input type="text" name="choix5" class="form-control" value="" placeholder="Choix 5">
					<input type="text" name="choix6" class="form-control" value="" placeholder="Choix 6">
				</form>
				<p class="tagline">
					Numero de la mission :<br>
					Nom de la mission :<br>
					Image de la mission :<br>
					Image mission Grisée :<br>
				</p>
				<p> Spitch de la mission </p>
				<textarea placeholder="Entrez votre message ici..." class="form-control tinymce" rows="7" name="message" required></textarea>

				<input type="text" name="choix1" class="form-control" value="" placeholder="Choix 1">
				<input type="text" name="choix2" class="form-control" value="" placeholder="Choix 2">
				<input type="text" name="choix3" class="form-control" value="" placeholder="Choix 3">
				<input type="text" name="choix4" class="form-control" value="" placeholder="Choix 4">
				<input type="text" name="choix5" class="form-control" value="" placeholder="Choix 5">
				<input type="text" name="choix6" class="form-control" value="" placeholder="Choix 6">


				<p class="tagline">
					Numero de la mission :<br>
					Nom de la mission :<br>
					Image de la mission :<br>
					Image mission Grisée :<br>
				</p>
				<p> Spitch de la mission </p>
				<textarea placeholder="Entrez votre message ici..." class="form-control tinymce" rows="7" name="message" required></textarea>

				<input type="text" name="choix1" class="form-control" value="" placeholder="Choix 1">
				<input type="text" name="choix2" class="form-control" value="" placeholder="Choix 2">
				<input type="text" name="choix3" class="form-control" value="" placeholder="Choix 3">
				<input type="text" name="choix4" class="form-control" value="" placeholder="Choix 4">
				<input type="text" name="choix5" class="form-control" value="" placeholder="Choix 5">
				<input type="text" name="choix6" class="form-control" value="" placeholder="Choix 6">

				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="button" name="button" class="btn login_btn">Envoyer</button>
				</div>

			</div> <!-- /col -->
		</div> <!-- /row -->	

	


		<div class="container section" id="annonce">
	
			<h2 class="text-center title">Crééer une Annonce</h2>
			<div class="row">
				<div class="col-sm-12">    
					<input type="text" name="title_annonce" class="form-control" value="" placeholder="Titre de l'annonce">
					<textarea placeholder="Entrez la News ici..." class="form-control tinymce" rows="7" name="Annonce" required></textarea>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="button" name="button" class="btn login_btn">Envoyer</button>
					</div>
				</div>
			</div>


		</div>


		<div class="container section" id="membres">
		
			<h2 class="text-center title">Membres</h2>
			<div class="table-responsive">
		        <table class="table table-bordered text-center">
		          <thead>
		            <tr>
		              <th>Nom des Membres</th>
		              <th>Nom du Personnages</th>
		              <th>Supprimer le Membre</th>
		            </tr>
		          </thead>
		          <tbody >
		            <tr>

		            	<td>Mystique/Force/Esprit/Elementaire</td>
		            	<td>Jean Hubert Spitz</td>
		            	<td>
						<button type="button" name="button" class="btn login_btn">Supprimer</button>
						</td>


		            </tr>
		          </tbody>
		        </table>
		     </div><!--end of .table-responsive-->


		</div>


	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>