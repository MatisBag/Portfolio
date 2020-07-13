<?php
$title = "Portfolio - Matis Baguelin";
$description = "Matis Baguelin, je vous présente mon Portfolio, je suis en formation à l'EEMI (Ecole Européenne des Métiers de l'Internet) pour devenir développeur web !";
$pageUrl = "http://matisbaguelin.fr/";
$home = 1;


include('header.php'); 
?>


<main>
	<section id="presentation" class="container">
		<div class="about">
			<input type="checkbox" id="modeToggler">

			<h1 class="about__heading">Matis <br> Baguelin</h1>

			<h2 class="about__student">Étudiant en Développement Web</h2>

			<p class="about__copy">
				Etudiant à l'<a href="https://www.eemi.com/" target="_blanck" rel="noopener">EEMI</a> je m'intéresse aux
				métiers du web, en particulier celui de <span class="gras">développeur web</span>
			</p>

			<a class="about__CV btn" href="images/cv-matis-baguelin.pdf" download>Mon CV</a>
			<!-- name bouton ??? -->

		</div>

		<div class="animation animated bounceInRight">
			<div class="circle ">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</section>


	<section id="competences" class="container">

		<h3>Mes compétences</h3>

		<div class="competence">
			<div class="competence__langages">
				<h4 class="competence__heading">Front-end</h4>
				<img class="competence__image light" src="images/competences/front-end.png"
					alt="compétences front-end : HTML, css, JavaScript">
				<img class="competence__image dark" src="images/competences/d-front-end.png"
					alt="compétences front-end : HTML, css, JavaScript">
			</div>

			<div class="competence__langages">
				<h4 class="competence__heading">Back-end</h4>
				<img class="competence__image light" src="images/competences/back-end.png"
					alt="compétences back-end : PHP, MySQL et Node.js en 2ème année" title="Node.js en 2ème année">
				<img class="competence__image dark" src="images/competences/d-back-end.png"
					alt="compétences back-end : PHP, MySQL et Node.js en 2ème année" title="Node.js en 2ème année">
			</div>
		</div>


		<div class="outils">

			<h4 class="outils__heading">Outils</h4>

			<div class="outils__container">
				<figure class="outils__pic">
					<img class="outils__image light" src="images/competences/sass.png" alt="Logo Sass">
					<img class="outils__image dark" src="images/competences/d-sass.png" alt="Logo Sass">
					<figcaption>Sass</figcaption>
				</figure>
				<figure class="outils__pic">
					<img class="outils__image light" src="images/competences/github.png" alt="Logo Github">
					<img class="outils__image dark" src="images/competences/d-github.png" alt="Logo Github">
					<figcaption>Github</figcaption>
				</figure>
				<figure class="outils__pic">
					<img class="outils__image light" src="images/competences/git.png" alt="Logo Git">
					<img class="outils__image dark" src="images/competences/d-git.png" alt="Logo Git">
					<figcaption>Git</figcaption>
				</figure>
				<figure class="outils__pic">
					<img class="outils__image light" src="images/competences/materialize.png" alt="Logo Materialize">
					<img class="outils__image dark" src="images/competences/d-materialize.png" alt="Logo Materialize">
					<figcaption>Materialize</figcaption>
				</figure>
				<figure class="outils__pic">
					<img class="outils__image light" src="images/competences/wordpress.png" alt="Logo Wordpress">
					<img class="outils__image dark" src="images/competences/d-wordpress.png" alt="Logo Wordpress">
					<figcaption>Wordpress</figcaption>
				</figure>
				<figure class="outils__pic">
					<img class="outils__image light" src="images/competences/photoshop.png" alt="Logo Adobe Photoshop">
					<img class="outils__image dark" src="images/competences/d-photoshop.png" alt="Logo Adobe Photoshop">
					<figcaption>Photoshop</figcaption>
				</figure>
				<figure class="outils__pic">
					<img class="outils__image light" src="images/competences/adobexd.png" alt="Logo Adobe XD">
					<img class="outils__image dark" src="images/competences/d-adobexd.png" alt="Logo Adobe XD">
					<figcaption>Adobe XD</figcaption>
				</figure>
			</div>

		</div>

	</section>



	<section id="projects" class="container">
		<h3>Projets</h3>

		<div class="proj-flex">
			<div class="proj-prev">
				<h4 class="proj-prev__heading">Espace administrateur</h4>
				<p class="proj-prev__byline">Réalisation d'une consigne</p>
				<div class="proj-prev__container">
					<div class="box">
						<a href="espace-administrateur/">
							<img src="images/projets/espace-administrateur.png" alt="Projet 1 : Espace admin">
						</a>
					</div>
				</div>
			</div>

			<div class="proj-prev">
				<h4 class="proj-prev__heading">Conference</h4>
				<p class="proj-prev__byline">Réalisation maquette</p>
				<div class="proj-prev__container">
					<div class="box">
						<a href="conference/">
							<img src="images/projets/conference.png" alt="Projet 2 : Conference">
						</a>
					</div>
				</div>
			</div>

			<div class="proj-prev">
				<h4 class="proj-prev__heading">Framework</h4>
				<p class="proj-prev__byline">Réalisation avec Materialize</p>
				<div class="proj-prev__container">
					<div class="box">
						<a href="materialize/">
							<img src="images/projets/home-page.png"
								alt="Projet 3 : Réalisation site avec avec Materialize">
						</a>
					</div>
				</div>
			</div>
		</div>

		<a href="http://mbaguelin.eemi.tech/" class="btn btn--center" target="_blank">MINI-PROJETS</a>

	</section>


	<div class="top">
		<a href="#header">
			<img src="images/up-arrow.png" alt="fleche icon">
		</a>
	</div>

</main>

<?php
include('footer.php'); 
?>