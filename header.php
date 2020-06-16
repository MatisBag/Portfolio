<?php
$homeUrl = "http://matisbaguelin.fr/";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (isset($title)){echo($title);} ?></title>
	<meta name="title" content="<?php if (isset($title)){echo($title);} ?>">
    <meta name="description" content="<?php if (isset($description)){echo($description);} ?>">	
	<link rel="icon" type="image/png" href="<?php echo($homeUrl); ?>images/home-icon.png" />

	<link rel="alternate" href="<?php echo($homeUrl); ?>" hreflang="fr-fr" />

	<meta name="author" content="Matis Baguelin">
	<meta name="Keywords" content="Matis Baguelin, developpeur web, developpeur web junior, web developer, web developer junior">

	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php if (isset($pageUrl)){echo($pageUrl);} ?>">
	<meta property="og:title" content="<?php if (isset($title)){echo($title);} ?>">
	<meta property="og:description" content="<?php if (isset($description)){echo($description);} ?>">
	<meta property="og:image" content="<?php echo($homeUrl); ?>images/image-apercu.PNG">
	<!--1200x628-->
	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php if (isset($pageUrl)){echo($pageUrl);} ?>">
	<meta property="twitter:title" content="<?php if (isset($title)){echo($title);} ?>">
	<meta property="twitter:description" content="<?php if (isset($description)){echo($description);} ?>">
	<meta property="twitter:image" content="<?php echo($homeUrl); ?>images/image-apercu.PNG">

	<meta name="google-site-verification" content="mRoWjeL0n7yhVT14MbJg3sooMVon6Lk6Lcc-OVscFlQ" />
	
	<?php 
    if (isset($home)) {
        echo ('
			<link rel="stylesheet" type="text/css" href="css/style.css">
    		');
		}
		else {
			echo('
			<link rel="stylesheet" type="text/css" href="'.$homeUrl.'css/style_projets.css">
			');
		}
?>
    
	<link rel="stylesheet" type="text/css" href="<?php echo($homeUrl); ?>css/d-style.css">
	
</head>


<body class="light-mode">

	<header>
		<a href="/">
			<img src="<?php echo($homeUrl); ?>images/home-icon.png" alt="Home">
			<img src="<?php echo($homeUrl); ?>images/d-home-icon.png" alt="Home">
		</a>

		<div>
			<a href="https://www.linkedin.com/in/matis-baguelin/" target="_blank" rel="noopener">
				<img src="<?php echo($homeUrl); ?>images/linkedin.png" alt="logo linkedin">
				<img src="<?php echo($homeUrl); ?>images/d-linkedin.png" alt="logo linkedin">
			</a>
			<a href="mailto:matis.baguelin@gmail.com">
				<img src="<?php echo($homeUrl); ?>images/mail.png" alt="icon mail">
				<img src="<?php echo($homeUrl); ?>images/d-mail.png" alt="icon mail">
			</a>
		</div>
	</header>