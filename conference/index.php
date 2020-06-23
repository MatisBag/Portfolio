<?php
$title = "Matis Baguelin : Conference";
$description = "Projet conference : Intégration d'une maquette responsive";
$pageUrl = "http://matisbaguelin.fr/conference/";


include('../header.php'); 
?>


<main>

    <section id="projet" class='projet container'>

        <h2 class="projet__heading">Conference</h2>

        <div class="projet__flex">
            <a href="http://conference.matisbaguelin.fr/" target="_blanck">
                <div class="slideShowContainer">
                    <div class="imageHolder">
                        <img src="../images/projets/projet2/home-page.png" alt="Page d'accueil">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet2/speakers-page.png" alt="Page speakers">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet2/agenda-page.png" alt="Page agenda">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet2/auditorium-page.png" alt="Page auditorium">
                    </div>
                    <div class="imageHolder">
                        <img src="../images/projets/projet2/sponsors-page.png" alt="Page de sponsors">
                    </div>
                </div>
            </a>


            <div class="projet__copy">
                <p class="projet__para">
                    Réalisation d'une maquette : <br>
                    <a href="https://i.pinimg.com/originals/7c/39/00/7c3900c859005ec907114689f79da4a3.jpg" target="_blank">Conference</a>
                </p>
            </div>


        </div>

        <div class="projet__btns-flex">
            <a href="http://conference.matisbaguelin.fr/" class="btn-projet bouncy" target="_blanck">Visiter le site</a>
            <a href="https://github.com/MatisBag/The-conference" class="btn-projet btn-projet--black" target="_blanck"><img src="../images/competences/d-github.png" alt="github icon">Github</a>
        </div>

    </section>

</main>


<?php
    include('../footer.php');
?>