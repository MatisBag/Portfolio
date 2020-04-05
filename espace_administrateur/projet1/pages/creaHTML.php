<?php
session_start();

if (empty($_SESSION))
{
    header ('location:../login.php?acces');
}

// Instanciation

$file_name = "";
$titre = "";
$description = "";
$h1 = "";
$main = "";

// Traitement

if(!empty($_POST)){

    foreach ($_POST as $key => $value)
	{
		$$key = htmlentities($value);
    }

    $lenom = html_entity_decode($file_name);
    $search  = array(' ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', '@', '#', '!', '&');                                       
	$replace = array('', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', '_', '_', '_', '_');         
	$lenom = str_replace($search, $replace, $lenom);

    $main = $_POST['main']; // -> enlever le htmlentities

    if (($file_name == "") or (strpos($file_name, " ")))
	{
		$erreur = "nom du fichier incorrect";
	}
    else{
        $succes = 'La page HTML a bien été crée ! <br>
        <a href="espace_admin.php">Retourner à l\'acceuil</a>';

        $html =
        '<!DOCTYPE html>
        <html>
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="'.$_POST['description'].'"/>
                <title>'.$_POST['titre'].'</title>
                <style>
                    * { text-align: center; }
                </style>
        </head>
        <body>
        <h1>'.$_POST['h1'].'</h1>
        
        <main>
        '.$main.'
        </main>
        
        </body>
        </html>';

        $fichier = fopen("$file_name.html","w") or die ("Erreur de création du fichier");

        $contenu = "$html";

        $contenu = utf8_decode($contenu);

                if (!fwrite($fichier,$contenu))
    {
        echo("Erreur fwrite");
    }

    if (!fclose($fichier))
    {
        echo("Erreur fclose");
    }

    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({
        selector:'textarea'});</script>
    <style>
    .connexion div {
        margin: 5px;
    }
    .connexion {
        display : flex;
        flex-direction: column;
        height: 700px !important;
    }
    
    </style>
    <title>Création page HTML</title>
</head>

<body>
    <main>
        <section class="connexion">

        <?php
    if (isset($succes))
{
echo("<p style=\"color: blue; margin-bottom: 0;\">".$succes."</p>");
}

    elseif (isset($erreur))
{
	echo("<p style=\"color: red; margin-bottom: 0;\">".$erreur."</p>");
}

    if (!isset($succes))
{ ?>    
<!-- <div class="droite"></div> -->
        <form method="post" action="creaHTML.php" enctype="multipart/form-data">
        <div class="contenu">
        <div>
            <label for="file_name"><img src="../images/icon_dossier.png" alt="icon dossier" height="20px" width="20px"></label>
            <input type="text" name="file_name" id="file_name" placeholder="Nom du fichier">
        </div>
        <div>
            <label for="titre"><img src="../images/icon_title.png" alt="icon title" height="20px" width="20px"></label>
            <input type="text" name="titre" id="titre" placeholder="Titre" value="<?php echo($titre) ?>">
        </div>
        <div>
            <label for="description"><img src="../images/icon_description.png" alt="icon description" height="20px" width="20px"></label>
            <input type="text" name="description" id="description" placeholder="Description" value="<?php echo($description) ?>">
        </div>
        <div>
            <label for="h1"><img src="../images/icon_h1.png" alt="icon h1" height="20px" width="20px"></label>
            <input type="text" name="h1" id="h1" placeholder="H1" value="<?php echo($h1) ?>">
        </div>
        </div>
            <label for="main">Contenu :</label>
           <textarea name="main" id="main" rows="12"><?php echo($main); ?></textarea>
           <input type="submit" value="Créer la page">
        </form>
        
    <?php
}
    ?>
        </section>
    </main>
</body>

</html>