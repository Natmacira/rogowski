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
		<!-- menu mobile close -->
		<div class="menu-mobile">
			<ul class="burguer-nav-ul">
				<li>
					<a href="index.php" class="mobile-mikel-rogowski-link">
						<img src="img/text/el-mikel.jpg" alt="Mikokal Rogowski" class="el-maikel-mobile">
						<img src="img/text/rogowski.jpg" alt="Rogowski" class="rogowski-mobile">
					</a>
				</li>
				<li><button id="burger-menu-button">
						<img src="img/text/open-menu.png" alt="Button to open mobile menu" class="burger-menu-open">
						<!-- <img src="img/text/close-menu.png" alt="Button to close mobile menu" class="burger-menu-close"> -->
					</button>
				</li>
			</ul>
		</div>

		<!-- menu open in mobile -->
		<div class="burguer">
			<nav>
				<ul>
					<li>
						<ul class="burguer-nav-ul">
							<li><a href="index.php" class="mobile-mikel-rogowski-link">
									<img src="img/text/el-mikel.jpg" alt="Mikokal" class="el-maikel-mobile">
									<img src="img/text/rogowski.jpg" alt="Rogowski" class="rogowski-mobile">
								</a></li>
							<li><button id="burger-menu-button-close">
									<!-- <img src="img/text/open-menu.png" alt="Button to open mobile menu" class="burger-menu-open"> -->
									<img src="img/text/close-menu.png" alt="Button to close mobile menu" class="burger-menu-close">
								</button>
							</li>
						</ul>
					</li>
					<li>
						<ul class="open-mobile-ul">
							<li>
								<details open>
									<summary>
										<img src="img/text/portfolio.jpg" alt="Portfolio">
									</summary>
									<ul>
										<li><a href="travels-in-reality.php">
												<img src="img/text/travels.jpg" alt="Travels in" class="travels-in">
												<img src="img/text/reality.jpg" alt="reality" class="reality">
											</a>
										</li>
										<li><a href="americana-light.php">
												<img src="img/text/americana.jpg" alt="Americana" class="americana">
												<img src="img/text/light.jpg" alt="Light" class="light">
											</a>
										</li>
										<li><a href="wapien.php"><img src="img/text/wapien.jpg" alt="Wapieñ" class="wapien"></a></li>
										<li><a href="film.php"><img src="img/text/film.jpg" alt="Film" class="film"></a></li>
										<li><a href="grandpa.php"><img src="img/text/grandpa.png" alt="Grandpa" class="grandpa"></a></li>
										<li><a href="colabs.php"><img src="img/text/colabs.jpg" alt="Colabs" class="colabs"></a></li>
									</ul>
								</details>
							</li>
							<li><a href="about.php"><img src="img/text/about.jpg" alt="About"></a></li>
						</ul>
					</li>
					<li>
						<ul>
							<li><a href="mailto:rogal@ka.onet.pl"><img src="img/text/contact.jpg" alt="Contact" class="contact"></a></li>
							<li><a href="https://www.instagram.com/mikolaj.rogowski/?igshid=NTc4MTIwNjQ2YQ==" target="_blank"><img src="img/text/insta.png" alt="Insta" class="insta"></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<!-- menu in desktop -->
		<div class="desktop-menu">
			<nav>
				<ul class="ul-container">
					<li><a href="index.php">
							<img src="img/text/el-mikel.jpg" alt="Mikokal Rogowski" class="el-maikel-desktop">
							<img src="img/text/rogowski.jpg" alt="Rogowski" class="rogowski-desktop">
						</a>
					</li>
					<li>
						<details>
							<summary>
								<img src="img/text/portfolio.jpg" alt="Portfolio" class="portfolio-desktop">
							</summary>
							<ul>
								<li><a href="travels-in-reality.php">
										<img src="img/text/travels.jpg" alt="Travels in reality" class="travels-in">
										<img src="img/text/reality.jpg" alt="reality" class="reality">
									</a></li>
								<li><a href="americana-light.php">
										<img src="img/text/americana.jpg" alt="Americana" class="americana">
										<img src="img/text/light.jpg" alt="Light" class="light">
									</a></li>
									<li><a href="wapien.php"><img src="img/text/wapien.jpg" alt="Wapieñ" class="wapien"></a></li>
										<li><a href="film.php"><img src="img/text/film.jpg" alt="Film" class="film"></a></li>
										<li><a href="grandpa.php"><img src="img/text/grandpa.png" alt="Grandpa" class="grandpa"></a></li>
										<li><a href="colabs.php"><img src="img/text/colabs.jpg" alt="Colabs" class="colabs"></a></li>
							</ul>

						</details>
					</li>
					<li><a href="about.php"><img src="img/text/about.jpg" alt="About" class="about-desktop"></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>