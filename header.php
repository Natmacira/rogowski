<?php

/**
 * Site Version: 1.0.2
 * Site author: Natalia Ciraolo
 * Author website: https://github.com/Natmacira
 * Author e-mail: natimciraolo@gmail.com
 */

define('SITE_VERSION', '1.0.0');

?>
<?php
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mikokal Rogowski</title>
	<link rel="stylesheet" href="style.min.css?v=<?php echo SITE_VERSION; ?>">
	<script>
		var base_url = "<?php echo $base_url; ?>";
	</script>
	<script src="js/script.js?v=<?php echo SITE_VERSION; ?>"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#0066ff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#0066ff">
	<meta itemProp="image" property="og:image" content="https://nodo.org.ar/img/favicon/android-icon-192x192.png" />
	<meta property="og:description" content="Combatimos la inseguridad alimentaria impactando positivamente en el medio ambiente.">
	<meta property="og:locale" content="es_LA">
	<meta property="og:image" content="https://nodo.org.ar/img/favicon/android-icon-192x192.png" />
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://nodo.org.ar/" />
</head>

<body>
	<header>

		<div class="desktop-menu">
			<nav>
				<ul class="ul-container">
					<li><a href="index.php">
							<img src="img/palabras-menu/Rogowski.png" alt="Mikokal Rogowski" class="el-maikel-desktop">
						</a>
					</li>
					<li>
						<details>
							<summary>
								<img src="img/palabras-menu/Portfolio.png" alt="Portfolio" class="portfolio-desktop">
							</summary>
							<ul>
								<li><a href="travels-in-reality.php">
										<img src="img/palabras-menu/travels-in-reality.png" alt="Travels in reality" class="travels-in">
									</a>
								</li>
								<li><a href="americana-light.php">
										<img src="img/palabras-menu/americana-light.png" alt="Americana" class="americana">
									</a>
								</li>
								<li><a href="wapien.php"><img src="img/palabras-menu/wapien.png" alt="Wapieñ" class="wapien"></a></li>
								<li><a href="film.php"><img src="img/palabras-menu/film.png" alt="Film" class="film"></a></li>
								<li><a href="grandpa.php"><img src="img/palabras-menu/Granpa.png" alt="Grandpa" class="grandpa"></a></li>
								<li><a href="colabs.php"><img src="img/palabras-menu/colabs.png" alt="Colabs" class="colabs"></a></li>
							</ul>

						</details>
					</li>
					<li><a href="about.php"><img src="img/palabras-menu/About.png" alt="About" class="about-desktop"></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>