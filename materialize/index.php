<?php
$title = "Matis Baguelin : Materialize";
$description = "Projet Materialize : Le but était de développer un site web pour une boulangerie en utilisant un framework.";
$pageUrl = "http://matisbaguelin.fr/materialize/";


include('../header.php'); 
?>


<main>

    <section id="projet">
        <h2>
            Materialize
        </h2>
        <div class="leprojet">

            <a href="http://mbaguelin.eemi.tech/materialize/" target="_blanck">
                <!-- mettre le lien -->
                <div id="slider">
                    <figure>
                        <img src="../images/projets/projet3/home-page.png" alt="Page d'acceuil">
                        <img src="../images/projets/projet3/command-page.png" alt="Page commande">
                        <img src="../images/projets/projet3/contact-page.png" alt="Page contact ">
                        <img src="../images/projets/projet3/home-page.png" alt="Page d'acceuil">
                        <img src="../images/projets/projet3/command-page.png" alt="Page commande">
                    </figure>
                </div>
            </a>


            <div class="text_projet">
                <p>
                    L'objectif était de créer le front-end d'un site web pour une boulangerie à l'aide d'un framework.
                </p>
                <p>Le framework utilisé est <a href="https://materializecss.com/" target="_blanck">Materialize</a>.</p>
            </div>


        </div>

        <div class="btns">
            <a href="http://mbaguelin.eemi.tech/materialize/" class="bouncy" target="_blanck">Visiter le site</a>
        </div>

    </section>

</main>

<?php
    include('../footer.php');
?>