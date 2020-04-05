<?php

if (!empty($_POST))
{
	if (($_POST['mail'] == "") or ($_POST['mdp'] == ""))
	{
		header ("location:login.php?required"); 
	}
	else
	{
	$loggedin = FALSE ;

	$fp = fopen ('comptes.csv', 'rb');

	while ($line = fgetcsv ($fp, 1000, ";")){

		if (($line[3] == $_POST['mail']) AND ($line[4] == ($_POST['mdp']))) {

		$loggedin = TRUE;

		//break;

		}
	}

	if ($loggedin) {
	header("location:pages/espace_admin.php");
	session_start();
		$_SESSION['mail'] = $_POST['mail'];
	}
	else {
		header("location:login.php?incorrect");
	}
	}
}

if (isset($_GET['disconnected'])) // A FAIIRE
{
	session_start();
	session_destroy();
	$disconnected = 'Vous avez été déconnecté.';
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- En-tête de la page-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Connexion</title>
</head>

<body>

	<main>
		<section class="connexion">
			<div class="gauche">
				<img src="images/imgConnexion" alt="connexion">
			</div>

			<div class="droite">
				<h2>Se connecter</h2>
				<form method="post" action="login.php">
					<div class="btn">
						<label for="mail"><img src="images/iconMail" alt="icone mail" width="20px"></label>
						<input type="email" name="mail" id="mail" placeholder="Votre mail">
					</div>
					<div class="btn">
						<label for="password"><img src="images/iconPassword" alt="icone password" width="15px"></label>
						<input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
					</div>
					<?php 
if (isset($_GET["acces"]))
{
        echo("<p style=\"color:red;\">Merci de vous connecter</p>");
}

if (isset($_GET["required"]))
{
        echo("<p style=\"color:red;\">Merci de bien remplir vos informations</p>");
}

if (isset($_GET["disconnected"]))
{
        echo("<p style=\"color:red;\">".$disconnected."</p>");
}

elseif (isset($_GET["incorrect"]))
{
        echo("<p style=\"color:red;\">Mot de passe ou Email incorrect</p>");
}
?>
					<div>
						<input type="submit" value="Se connecter">
					</div>
				</form>
			</div>
		</section>
	</main>
</body>

</html>