<?php
$title = "Matis Baguelin : Espace admin PHP";
$description = "Projet espace administrateur : Réalisation d'une consigne d'un devoir de PHP. Ce TP nous a permis de revoir tout ce qu'on a fait depuis le début de l'année et de l'appliquer";
$pageUrl = "http://matisbaguelin.fr/espace-administrateur/";


include('../header.php'); 
?>


<main>
    <section id="projet" class='projet container'>

        <h2 class="projet__heading">Espace administrateur</h2>

        <div class="projet__flex">

            <a href="http://espace-admin.matisbaguelin.fr/" target="_blanck">
                <div class="slideShowContainer">
                    <div class="imageHolder">
                        <img src="../images/projets/projet1/espace_admin.png" alt="Page d'accueil">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet1/accueil.png" alt="Page administration">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet1/creer_comptes.PNG" alt="Page de créations de comptes">
                    </div>
                </div>
            </a>

            <div class="projet__copy">
                <p class="projet__para">
                    L'objectif était de créer un espace d'administration permettant de générer automatiquement des
                    fichiers HTML à partir d'un formulaire.
                </p>
                <p class="projet__para">
                    La liste des comptes utilisateurs sera accessible dans un fichier CSV sous la forme : civilite;
                    nom;
                    prenom; mail; mot de passe; photo
                </p>
                <p>Après connexion :
                    <ul>
                        <li> Formulaire de création d'un nouveau compte administrateur </li>
                        <li> La photo sera uploadée sur le serveur sous la forme photo-nom.jpg </li>
                        <li> Affichage des différents comptes administrateurs sur une page </li>
                        <li> Formulaire de génération d'une page HTML </li>
                        <li> Pour le main, utilisation de TinyMCE, éditeur WYSIWYG </li>
                        <li> Toutes les pages accessibles après connexion ne pourront pas être affichées sans
                            connexion
                        </li>
                    </ul>
                </p>
                <p class="projet__para"><span class="italic"> *css optionnel* / avec <a
                            href="https://www.linkedin.com/in/maxime-mugniot/" target="_blanck">Maxime
                            Mugniot</a></span></p>
            </div>

        </div>

        <div class="projet__btns-flex">
            <a href="http://espace-admin.matisbaguelin.fr/" class="btn-projet bouncy" target="_blanck">Visiter le
                site</a>
            <a href="https://github.com/MatisBag/Espace-administrateur" class="btn-projet btn-projet--black" target="_blanck"><img src="../images/competences/d-github.png" alt="github icon">Github</a>
        </div>

        <p>mail : visiteur@gmail.com / mot de passe : Visite123!</p>
    </section>

</main>


<?php
    include('../footer.php');
?>