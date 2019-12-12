<?php $title = "Aide" ?>

<?php ob_start(); ?>

<section class="d-flex justify-content-center">
	<div class="home_card container">
		<div class="news_co justify-content-center">
			<div class=" home_news ">
				<h1 class="text-center"> Vous avez besoin d'aide ?</h1>			
			</div>
		</div>

		<div class="home_tuto">
			<p> Pour savoir comment fonctionne aventure Hero, cliquez sur Captain Tuto</p>
		</div>
		<!-- Tuto en slider -->
		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">1 / 4</div>
				<img class="img-center img-fluid" src="public/images/heros/city-superhero-vector.jpg" onclick="plusSlides(1)" alt="image Tutoriel">
				<div class="text">Cliquez sur Captain Tuto</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 4</div>
				<img class="img-center img-fluid" src="public/images/tuto1.jpg" onclick="plusSlides(1)"  alt="image Tutoriel">
				<div class="text">Inscrivez vous, puis connectez vous directement via la page d'accueil, ou via la page de connexion.</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 4</div> 
				<img class="img-center img-fluid" src="public/images/tuto2.jpg" onclick="plusSlides(1)"  alt="image Tutoriel">
				<div class="text">Cliquez sur l'image pour commencer le prologue !</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">4 / 4</div> 
				<img class="img-center img-fluid" src="public/images/tuto3.jpg" onclick="plusSlides(1)"  alt="image Tutoriel">
				<div class="text">Créez votre personnage, et voilà, vous êtes prêt pour commencer l'aventure !</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>

		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span> 
		</div>

	</div>
</section>

<script src="public/js/slidertuto.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>