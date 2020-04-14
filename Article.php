<?php
	if(isset($_GET["title"]) && isset($_GET["id"]))
    {
        $title = $_GET["title"];
        $id = $_GET["id"];
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style/general.css"/>
		<link rel="stylesheet" type="text/css" href="style/article.css"/>
		<title> Niama ELKHBIR - <?php echo $title; ?> -</title>
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
		<section id="section">
			<h3 id="title">
				<?php echo $title; ?>
			</h3>
			<article id="article">
				<p>
					<?php
						$linkToLinks = "data/links.txt";
						$links = fopen($linkToLinks, "r");
						$c=1;
						while($c<$id)
						{
							fgets($links);
							$c += 1;
						}
						$ref = fgets($links);
						$ref = rtrim($ref);
						fclose($links);
						$content = file_get_contents("articles/".$ref.".txt");
						$content = utf8_encode($content);
						echo $content;
					?>
				</p>
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
