<?php
$home = 1;

include('header.php'); 

$title = "Portfolio - Matis Baguelin";
$description = "Matis Baguelin, je vous présente mon Portfolio, je suis en formation à l'EEMI (Ecole Européenne des Métiers de l'Internet) pour devenir développeur web !";
$pageUrl = "http://matisbaguelin.fr/";

?>

<main>
	<section id="presentation">
		<div class="pres-left">
			<input type="checkbox" id="modeToggler">

			<h1>Matis <br> Baguelin</h1>

			<h2>Étudiant en Développement Web</h2>

			<p>
				Etudiant à l'<a href="https://www.eemi.com/" target="_blanck" rel="noopener">EEMI</a> je m'intéresse aux
				métiers du
				web, en particulier celui de
				<span class="gras">développeur web</span>
			</p>

			<a href="images/cv-matis-baguelin.pdf" download>Mon CV </a>

		</div>

		<div class="pres-right animated bounceInRight">
			<div class="circle ">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</section>


	<section id="competences">
		<h3>
			Mes compétences
		</h3>
		<div class="topcompetences">
			<div class="competence">
				<h4>Front-end</h4>
				<img src="images/competences/front-end.png" alt="HTML, CSS, JS" title="JS en apprentissage">
				<img src="images/competences/d-front-end.png" alt="HTML, CSS, JS" title="JS en apprentissage">
			</div>

			<div class="competence">
				<h4>Back-end</h4>
				<img src="images/competences/back-end.png" alt="PHP, MySQL, Node.js" title="Node.js en 2ème année">
				<img src="images/competences/d-back-end.png" alt="PHP, MySQL, Node.js" title="Node.js en 2ème année">
			</div>
		</div>
		<div class="outils">

			<h4>Outils</h4>

			<div class="autres">
				<figure>
					<img src="images/competences/sass.png" alt="Logo Sass">
					<img src="images/competences/d-sass.png" alt="Logo Sass">
					<figcaption>Sass</figcaption>
				</figure>
				<figure>
					<img src="images/competences/github.png" alt="Logo Github">
					<img src="images/competences/d-github.png" alt="Logo Github">
					<figcaption>Github</figcaption>
				</figure>
				<figure>
					<img src="images/competences/git.png" alt="Logo Git">
					<img src="images/competences/d-git.png" alt="Logo Git">
					<figcaption>Git</figcaption>
				</figure>
				<figure>
					<img src="images/competences/materialize.png" alt="Logo Materialize">
					<img src="images/competences/d-materialize.png" alt="Logo Materialize">
					<figcaption>Materialize</figcaption>
				</figure>
				<figure>
					<img src="images/competences/wordpress.png" alt="Logo Wordpress">
					<img src="images/competences/d-wordpress.png" alt="Logo Wordpress">
					<figcaption>Wordpress</figcaption>
				</figure>
				<figure>
					<img src="images/competences/photoshop.png" alt="Logo Adobe Photoshop">
					<img src="images/competences/d-photoshop.png" alt="Logo Adobe Photoshop">
					<figcaption>Photoshop</figcaption>
				</figure>
				<figure>
					<img src="images/competences/adobexd.png" alt="Logo Adobe XD">
					<img src="images/competences/d-adobexd.png" alt="Logo Adobe XD">
					<figcaption>Adobe XD</figcaption>
				</figure>
			</div>
		</div>
	</section>


	<section id="projets">
		<h3>Projets</h3>

		<div class="lesprojets">
			<div class="projet">
				<h4>Espace administrateur</h4>
				<p>Réalisation d'une consigne</p>
				<div class="container">
					<div class="box">
						<a href="espace-administrateur/">
							<img src="images/projets/espace-administrateur.png" alt="Projet 1 : Espace admin">
						</a>
					</div>
				</div>
			</div>

			<div class="projet">
				<h4>Conference</h4>
				<p>Réalisation maquette</p>
				<div class="container">
					<div class="box">
						<a href="conference/">
							<img src="images/projets/conference.png" alt="Projet 2 : Conference">
						</a>
					</div>
				</div>
			</div>

			<div class="projet">
				<h4>Framework</h4>
				<p>Réalisation avec Materialize</p>
				<div class="container">
					<div class="box">
						<a href="materialize/">
							<img src="images/projets/home-page.png"
								alt="Projet 3 : Réalisation site avec avec Materialize">
						</a>
					</div>
				</div>
			</div>

		</div>
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