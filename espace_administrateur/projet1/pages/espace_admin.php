<?php
session_start();
if (empty($_SESSION))
{
    header ('location:../login.php?acces');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Espace Admin</title>
</head>

<body>

    <main>
        <section class="connexion">
            <div class="gauche">
                <img src="../images/imgConnexion" alt="connexion">
            </div>

            <div class="droite">
            
                <h2>Espace admin</h2>
                <ul>
                    <li>
                        <a href="creaCompte.php">Créer un compte admin</a>
                    </li>
                    <li>
                        <a href="utilisateurs.php" target="_blank">Liste des admins</a>
                    </li>
                    <li>
                        <a href="creaHTML.php">Génerer une page html</a>
                    </li>
                    <?php
                        if (($_SESSION['mail'] == "admin@eemi.com"))
                        {
                            echo('<li>
                                    <a href="#">Supprimer un compte</a>
                                </li>'); // A FAIIRE 
                        }
                    ?>
                </ul>
            <a href="../login.php?disconnected">Se déconnecter</a>
            </div>
            
        </section>
    </main>
</body>

</html>