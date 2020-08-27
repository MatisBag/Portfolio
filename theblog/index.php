<?php
$title = "Matis Baguelin : The Blog";
$description = "Projet The Blog : Le but était de développer un blog, avec un espace membres pour pouvoir écrire des commentaires.";
$pageUrl = "http://matisbaguelin.fr/blog/";


include('../header.php');
?>


<main>

    <section id="projet" class='projet container'>

        <h2 class="projet__heading">Blog (En développement)</h2>

        <div class="projet__flex">
            <a href="http://mbaguelin.eemi.tech/BDD/blog/" target="_blanck">
                <div class="slideShowContainer">
                    <div class="imageHolder">
                        <img src="../images/projets/projet4/article.PNG" alt="Page d'article">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet4/" alt="">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet4/" alt="">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet4/" alt="">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet4/" alt="">
                    </div>
                </div>
            </a>

            <div class="projet__copy">
                <p class="projet__para">
                    L'objectif était de créer un blog avec un espace membres (avec une BDD) pour pouvoir ecrire un commentaire.
                </p>
                <p class="projet__para"></p>
            </div>
        </div>

        <div class="projet__btns-flex">
            <a href="http://mbaguelin.eemi.tech/BDD/blog/" class="btn-projet bouncy" target="_blanck">Visiter le site</a>
            <a href="https://github.com/MatisBag/tp-blog" class="btn-projet btn-projet--black" target="_blanck"><img src="../images/competences/d-github.png" alt="github icon">Github</a>
        </div>

    </section>

</main>

<?php
include('../footer.php');
?>