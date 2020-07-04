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
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo($homeUrl); ?>" />

	<meta name="author" content="Matis Baguelin">
	<meta name="Keywords"
		content="Matis Baguelin, developpeur web, developpeur web junior, web developer, web developer junior">

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
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo($homeUrl); ?>/css/prefixed/style.css">

</head>


<body class="light-mode">

	<header id="header" class="header">
		<a href="/" class="header__logo">
			<img src="<?php echo($homeUrl); ?>images/home-icon.png"  class="animated bounceIn light" alt="Home">
			<img src="<?php echo($homeUrl); ?>images/d-home-icon.png" class="animated bounceIn dark" alt="Home">
		</a>

		<div class="header__contact">
			<a href="https://www.linkedin.com/in/matis-baguelin/" target="_blank" rel="noopener">
				<img src="<?php echo($homeUrl); ?>images/linkedin.png" class="animated bounceInDown light" alt="logo linkedin">
				<img src="<?php echo($homeUrl); ?>images/d-linkedin.png" class="animated bounceInDown dark" alt="logo linkedin">
			</a>
			<a href="mailto:matis.baguelin@gmail.com">
				<img src="<?php echo($homeUrl); ?>images/mail.png" class="animated bounceInDown light" alt="icon mail">
				<img src="<?php echo($homeUrl); ?>images/d-mail.png" class="animated bounceInDown dark" alt="icon mail">
			</a>
		</div>
	</header>