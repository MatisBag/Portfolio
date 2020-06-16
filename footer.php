<footer>
    <div class="footer">
        <address>
            <a href="https://www.linkedin.com/in/matis-baguelin/" target="_blanck" rel="noopener">Linkedin</a>
            <a href="https://github.com/MatisBag" target="_blanck" rel="noopener">Github</a>
            <p>matis.baguelin@gmail.com</p>
        </address>

        <div class="copyright">
            <figure>
                <img src="<?php if (isset($homeUrl)){echo($homeUrl);} ?>images/d-home-icon.png" alt="logo">
                <figcaption>MATIS BAGUELIN</figcaption>
            </figure>
            <p>Copyright © 2020 Matis baguelin, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php 
    if (isset($home)) {
        echo ('
        
        <script src="js/script.js"></script>

        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Matis Baguelin",
            "contactPoint": {
                "@type": "ContactPoint",
                "url": "http://matisbaguelin.fr/",
                "email": "matis.baguelin@gmail.com",
                "telephone": "+33 695960931"
            }
        }
        </script>
    ');
    }
    else {
        echo('
        <script src="../js/script-projets.js"></script>
        ');
    }
?>


</body>

</html>