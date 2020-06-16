<?php
$title = "Matis Baguelin : Espace admin PHP";
$description = "Projet espace administrateur : Réalisation d'une consigne d'un devoir de PHP. Ce TP nous a permis de revoir tout ce qu'on a fait depuis le début de l'année et de l'appliquer";
$pageUrl = "http://matisbaguelin.fr/espace-administrateur/";


include('../header.php'); 
?>


<main>

    <section id="projet">
        <h2>
            Espace administrateur
        </h2>
        <div class="leprojet">

            <a href="http://espace-admin.matisbaguelin.fr/" target="_blanck">
                <!-- mettre le lien -->
                <div id="slider">
                    <figure>
                        <img src="../images/projets/projet1/espace_admin.png" alt="Page d'acceuil">
                        <img src="../images/projets/projet1/accueil.png" alt="Page administrateur">
                        <img src="../images/projets/projet1/creer_comptes.PNG" alt="Page de création de comptes">
                        <img src="../images/projets/projet1/crea_html.PNG" alt="Page création fichier html">
                        <img src="../images/projets/projet1/espace_admin.png" alt="Page d'acceuil">
                    </figure>
                </div>
            </a>


            <div class="text_projet">
                <p>
                    L'objectif était de créer un espace d'administration permettant de générer automatiquement des
                    fichiers HTML à partir d'un formulaire.
                </p>
                <p>
                    La liste des comptes utilisateurs sera accessible dans un fichier CSV sous la forme : civilite;
                    nom;
                    prenom; mail; mot de passe; photo
                </p>
                <p>Après connexion :</p>
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
                <p><span class="italic"> *css optionnel* / avec <a href="https://www.linkedin.com/in/maxime-mugniot/"
                            target="_blanck">Maxime Mugniot</a></span></p>
            </div>


        </div>

        <div class="btns">
            <a href="http://espace-admin.matisbaguelin.fr/" class="bouncy" target="_blanck">Visiter le site</a>
            <!-- Mettre le lien -->
            <a href="https://github.com/MatisBag/Espace-administrateur" target="_blanck"><img
                    src="../images/competences/d-github.png" alt="github icon">Github</a>
            <!--Mettre lien-->
        </div>

        <p>mail : visiteur@gmail.com / mot de passe : Visite123!</p>
    </section>

</main>


<?php
    include('../footer.php');
?>