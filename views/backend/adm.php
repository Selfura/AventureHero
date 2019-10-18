<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co justify-content-center">
			<p> Bienvenue sur ta page Administrateur, c'est ici que tu gèreras les nouvelles missions, les annonces et la gestion des membres.</p>
		</div>
		<ul class="tab-group">
			<li class="tab active"><a href="#newchap">Nouveau Chapitre</a></li>
			<li class="tab"><a href="#annonce">Annonce</a></li>
			<li class="tab"><a href="#membres">Membres</a></li>
		</ul>


		<div class="container" id="newchap">

		<div class="row">
			<div class="col-md-12 col-lg-12 col-md-offset-1 col-lg-offset-1 text-center">	

				<!-- Site Title, your name, HELLO msg, etc. -->
				<h1 class="title">Créer un Nouveau Chapitre</h1>
				<h2 class="subtitle">Et ses Missions</h2>

				<!-- Short introductory (optional) -->
				<h3 class="tagline">
					Nom du Chapitre :<br>
					Numero du Chapitre :<br>
					Image du Chapitre :<br>
					Image chapitre Grisée :<br>
				</h3>
				<br>
				<p class="tagline">
					Numero de la mission :<br>
					Nom de la mission :<br>
					Image de la mission :<br>
					Image mission Grisée :<br>
				</p>
				<p> Spitch de la mission </p>
				<textarea placeholder="Entrez votre message ici..." class="form-control" rows="7" name="message" required></textarea>

				<input type="text" name="" class="form-control" value="" placeholder="Choix 1">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 2">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 3">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 4">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 5">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 6">

				<p class="tagline">
					Numero de la mission :<br>
					Nom de la mission :<br>
					Image de la mission :<br>
					Image mission Grisée :<br>
				</p>
				<p> Spitch de la mission </p>
				<textarea placeholder="Entrez votre message ici..." class="form-control" rows="7" name="message" required></textarea>

				<input type="text" name="" class="form-control" value="" placeholder="Choix 1">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 2">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 3">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 4">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 5">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 6">


				<p class="tagline">
					Numero de la mission :<br>
					Nom de la mission :<br>
					Image de la mission :<br>
					Image mission Grisée :<br>
				</p>
				<p> Spitch de la mission </p>
				<textarea placeholder="Entrez votre message ici..." class="form-control" rows="7" name="message" required></textarea>

				<input type="text" name="" class="form-control" value="" placeholder="Choix 1">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 2">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 3">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 4">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 5">
				<input type="text" name="" class="form-control" value="" placeholder="Choix 6">

				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="button" name="button" class="btn login_btn">Envoyer</button>
				</div>

	
			</div> <!-- /col -->
		</div> <!-- /row -->
	


		<div class="container" id="annonce">
	
			<h2 class="text-center title">Crééer une Annonce</h2>
			<div class="row">
				<div class="col-sm-12">    
					<input type="text" name="" class="form-control" value="" placeholder="Titre de l'annonce">
					<textarea placeholder="Entrez la News ici..." class="form-control" rows="7" name="Annonce" required></textarea>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="button" name="button" class="btn login_btn">Envoyer</button>
					</div>
				</div>
			</div>


		</div>


		<div class="container" id="membres">
		
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
						</div></td>


		            </tr>
		          </tbody>
		        </table>
		     </div><!--end of .table-responsive-->


		</div>


	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>