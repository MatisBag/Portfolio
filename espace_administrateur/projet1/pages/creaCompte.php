<?php
session_start();
if (empty($_SESSION))
{
    header ('location:../login.php?acces');
}

// Instanciation

$sexe = "";
$prenom = "";
$nom = "";
$mail = "";
$mdp = "";

// Traitement

if (!empty($_POST))
{
	// Récupération des valeurs saisies
	foreach ($_POST as $key => $value)
	{
		$$key = htmlentities($value);
    }

    //fichier 

    $name = $_FILES["photo"]["name"];
    $temp = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];
    $size = $_FILES["photo"]["size"]; // en octets
    $error = $_FILES["photo"]["error"];


    // verifier le . du fichier

    $point = strrpos($name, ".");
    $index = $point + 1;
    $extension =  substr($name, $index);

    $accept = array("png", "jpg", "jpeg");


    
    $tableau = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9"); //pour le mdp
        $test = 0;
        foreach ($tableau as $chiffre)
        {
            if (strpos($mdp, "$chiffre") !== false)
            {
                $test = 1;
            }
        } 
    $tableau2 = array("!", "#","$", "*", "?", "@");
        $test2 = 0;
        foreach ($tableau2 as $caracteres)
        {
            if (strpos($mdp, $caracteres) !== false)
            {
                $test2 = 1;
            }
        }
    
    $lenom = html_entity_decode($nom);
    $search  = array(' ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
	$replace = array('', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
	$lenom = str_replace($search, $replace, $lenom);


	// Champs obligatoires
	
	if (($sexe == "") or ($prenom == "") or ($nom == "") or ($mail == "") or ($name == "") or ($mdp == "") or ($temp == ""))
	{
		$erreur = "Merci de remplir tous les champs.";
	}
	
	elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL))
	{
		$erreur = "L'adresse mail n'est pas correcte.";
	}
    
    elseif ((strlen($mdp) < 8) or ($test == 0) or ($test2 == 0) or (is_numeric($mdp)) or (strtoupper($mdp) == $mdp) or (strtolower($mdp) == $mdp))
    {
        $erreur = "Le mot de passe n'est pas correct.";
    }

    elseif ($error != 0)
    {
        $erreur ="Le fichier n'a pas été uploadé";
    }

    elseif ($size > (1500 * 1000))
    {
        $erreur ="La taille est trop volumineux";
    }

    elseif (!in_array($extension, $accept))
    {
        $erreur = "Extension du fichier non supportée";
    }
	else
	{
        $destination = "../images/photo-".$lenom.".jpg";
        move_uploaded_file($temp, $destination);

        $succes = 'Le compte a bien été crée !<br>
        <a href="espace_admin.php">Retourner à l\'acceuil</a>';
	}
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Création compte admin</title>
    <style>
        @media screen and (min-width: 750px) {
            section.connexion {
                padding: 20px 75px !important;
                height: 600px;
            }
        }

        h2 {
            margin-bottom: 10px !important;
        }

        div {
            margin-bottom: 10px !important;
        }

        @media screen and (max-width: 750px) {
            main {
                min-height: 125vh;
            }
        }

        .droite form {
            height: 460px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <main>
        <section class="connexion">
            <div class="gauche">
                <img src="../images/imgCreation" alt="connexion">
            </div>

            <div class="droite">
                <h2>Compte admin</h2>
                <?php
                if (isset($succes))
{
$fichier = fopen("../comptes.csv","a") or die("Erreur de la création du compte, merci de réessayer");

$contenu = "$sexe;$prenom;$nom;$mail;$mdp;photo-$lenom.jpg;\n";

$contenu = utf8_decode($contenu);

if (!fwrite($fichier,$contenu))
{
	echo("Erreur fwrite");
}

if (!fclose($fichier))
{
	echo("Erreur fclose");
}

echo("<p style=\"color: blue; margin-bottom: 0;\">".$succes."</p>");

}

elseif (isset($erreur))
{
	echo("<p style=\"color: red; margin-bottom: 0;\">".$erreur."</p>");
}

if (!isset($succes))
{ ?>
                <form method="post" action="creaCompte.php" enctype="multipart/form-data">
                    <div style="width: 100%; flex-direction: row; justify-content: space-around;">
                        <label for="sexe"></label>
                        <span style="flex-direction: row; align-items: center;"><input type="radio" name="sexe"
                                value="2" <?php if ($sexe == "2") { echo("checked");} ?>>Homme</span>
                        <span style="flex-direction: row; align-items: center;"><input type="radio" name="sexe"
                                value="1" <?php if ($sexe == "1") { echo("checked");} ?>>Femme</span>
                    </div>

                    <div>
                        <label for="nom"><img src="../images/iconFirstName" alt="icone prenom" width="20px"></label>
                        <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo($nom); ?>">
                    </div>

                    <div>
                        <label for="prenom"><img src="../images/iconName" alt="icone nom" width="20px"></label>
                        <input type="text" name="prenom" id="prenom" placeholder="Prénom"
                            value="<?php echo($prenom); ?>">
                    </div>

                    <div class="btn">
                        <label for="mail"><img src="../images/iconMail" alt="icone mail" width="20px"></label>
                        <input type="email" name="mail" id="mail" placeholder="Mail" value="<?php echo($mail); ?>">
                    </div>

                    <div class="btn">
                        <label for="mdp"><img src="../images/iconPassword" alt="icone password" width="15px"></label>
                        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe (< 8, !, #,$, *, ?, @)"
                            value="<?php echo($mdp); ?>">
                    </div>

                    <div class='file-input'>
                        <input type='file' name="photo" id="photo" required accept="image/png, image/jpeg">
                        <label class='button' for="photo">Choisir Photo</label>
                        <span class='label' data-js-label>
                            No file selected
                    </div>

                    <div>
                        <input type="submit" value="Créer le compte">
                    </div>
                </form>
                <?php

}

?>
            </div>
        </section>
    </main>
    <script>
        var inputs = document.querySelectorAll('.file-input')

        for (var i = 0, len = inputs.length; i < len; i++) {
            customInput(inputs[i])
        }

        function customInput(el) {
            const fileInput = el.querySelector('[type="file"]')
            const label = el.querySelector('[data-js-label]')

            fileInput.onchange =
                fileInput.onmouseout = function () {
                    if (!fileInput.value) return

                    var value = fileInput.value.replace(/^.*[\\\/]/, '')
                    el.className += ' -chosen'
                    label.innerText = value
                }
        }
    </script>
</body>

</html>