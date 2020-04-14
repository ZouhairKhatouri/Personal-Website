<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style/general.css"/>
		<link rel="stylesheet" type="text/css" href="style/articles.css"/>
		<title> Niama ELKHBIR - Articles -</title>
	</head>
	</head>
	<body>
		<header>
			<h1>Niama Elkhbir</h1>
		</header>
		<nav>
			<ul>
				<li><a href="Accueil.html">Accueil</a></li>
				<li><a href="Apropos.html">À propos</a></li>
				<li><a href="Articles.php">Articles</a></li>
				<li><a href="Livres.php">Livres</a></li>
				<li><a href="MeContacter.html">Me contacter</a></li>
			</ul>
		</nav>
		<section>
			<article id="links">
				<?php
					include "WallBuilder.php";
				?>
			</article>
		</section>
		<footer>
			<div class="socialMedia">
				<a href="https://www.facebook.com/niama.elkhbir.1" target="_blank">
					<img src="img/facebookIcone.png" alt="facebook icone"></img>
				</a>
				<a href="https://www.instagram.com/niama_elkhbir/" target="_blank">
					<img src="img/instagramIcone.png" alt="instagram icone"></img>
				</a>
				<a href="https://fr.linkedin.com/in/niama-elkhbir-760809176" target="_blank">
					<img src="img/linkedinIcone.png" alt="linkedin icone"></img>
				</a>
			</div>
			<div>
				<p>© Tous les droits sont réservés.</p>
			</div>
		</footer>
	</body>
</html>
