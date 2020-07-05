<?php
$title = "Matis Baguelin : Materialize";
$description = "Projet Materialize : Le but était de développer un site web pour une boulangerie en utilisant un framework.";
$pageUrl = "http://matisbaguelin.fr/materialize/";


include('../header.php'); 
?>


<main>

    <section id="projet" class='projet container'>

        <h2 class="projet__heading">Materialize</h2>

        <div class="projet__flex">
            <a href="http://mbaguelin.eemi.tech/HTML-CSS-JS/materialize/" target="_blanck">
            <div class="slideShowContainer">
                    <div class="imageHolder">
                        <img src="../images/projets/projet3/home-page.png" alt="Page d'acceuil">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet3/command-page.png" alt="Page commande">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet3/contact-page.png" alt="Page contact">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet3/home-page.png" alt="Page d'acceuil">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet3/command-page.png" alt="Page commande">
                    </div>
                </div>
            </a>

            <div class="projet__copy">
                <p class="projet__para">
                    L'objectif était de créer le front-end d'un site web pour une boulangerie à l'aide d'un framework.
                </p>
                <p class="projet__para">Le framework utilisé est <a href="https://materializecss.com/" target="_blanck">Materialize</a>.</p>
            </div>
        </div>

        <div class="projet__btns-flex">
            <a href="http://mbaguelin.eemi.tech/HTML-CSS-JS/materialize/" class="btn-projet bouncy" target="_blanck">Visiter le site</a>
        </div>

    </section>

</main>

<?php
    include('../footer.php');
?>