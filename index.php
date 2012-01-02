<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Maison de la nature et de l'environnement de l'Is&egrave;re</title>
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<!-- Font provenant directement de Google -->
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>

	<!-- Chargement des javascript -->
	<script type="text/javascript" src="js/jquery-min.js"></script>
	<script type="text/javascript" src="js/caroufredsel.js"></script>

    <!-- Enabling HTML5 support for Internet Explorer -->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<?php include('header.php'); ?>

	<div id="main">
		<div id="content">
			<div id="slider">
				<a href="#">
					<img src="http://lorempixel.com/290/260/nature/1/Slider 290x260">
					<span><h4>LA FLORE EN ISERE</h4><p>Répartition des espèces végétales en Isère.<br /> Vous pouvez connaître la répartition des espèces floristiques répertoriées dans notre base de données [...]</p></span>
				</a>
				<a href="#">
					<img src="http://lorempixel.com/290/260/nature/2/Slider 290x260">
					<span><h4>L'APPEL POUR NOS MONTAGNES</h4><p>A l’initiative de 3 ONG, relayé par plus de 130 personnalités, cet appel est désormais le vôtre !<br /> Nous vous invitons à faire entendre votre voix [...]</p></span>
				</a>
				<a href="#">
					<img src="http://lorempixel.com/290/260/nature/3/Slider 290x260">
					<span><h4>Ateliers DD 2011</h4><p>Libres et ouvertes à tous, leur objectif est de permettre une confrontation ouverte et une appropriation commune de ces connaissances.</p></span>
				</a>
			</div>
			<div class="clearfix"></div>
			<a id="prev" class="prev" href="#">&lt;</a>
	        <a id="next" class="next" href="#">&gt;</a>
	        <div id="pager" class="pager"></div>


			<div id="news">
				<img id="actu" src="images/mnei-news-actu.png" alt="actus" title="les actus" width="95" height="90">
				<div id="article-container">
				<div id="article">
					<div id="date"><b>22 AOUT</b></div><!-- TRONQUER LE MOT DU MOIS SUR 4 LETTRES MAX-->
					<h3><a href="#">7e Prix du Livre Environnement : découvrez en exclusivité le lauréat 2011 !</a></h3>
					<p>Le Jury du 7e Prix du Livre Environnement a procédé à sa délibération finale jeudi 16 juin 2011 à la library Decitre <a href="#">(...)</a></p>
				</div>
				<img src="images/mnei-filet-vert.png" alt="separateur">
				<div id="article">
					<div id="date"><b>05 JUIL</b></div>
					<h3><a href="#">Eclairage nocturne : appel à témoignages</a></h3>
					<p>Dans le cadre de sa campagne régionale contre les excès d'éclairage nocturne, la FRAPNA Isère recherche des témoignages <a href="#">(...)</a></p>
				</div>
				<img src="images/mnei-filet-vert.png" alt="separateur">
				<div id="reseaux">
					<h3><a href="#">Rejoignez la MNEI sur les réseaux sociaux !</a></h3>
					<p>Facebook, Twitter, Peuplade, <a href="#">(...)</a></p>
				</div>
				<img src="images/mnei-filet-vert.png" alt="separateur">
				<div id="article">
					<div id="date"><b>15 JUIN</b></div>
					<h3><a href="#">La flore en Isère</a></h3>
					<p>Répartition des espèces végétales en Isère. Vous pouvez connaître la répartition des espèces floristiques répertoriées dans notre base de données <a href="#">(...)</a></p>
				</div>
				<img src="images/mnei-filet-vert.png" alt="separateur">
				<h4><a href="#">Voir toutes les ACTUS</a></h4>
				</div>
			</div>			
		</div>

		<?php include('sidebar.php'); ?>
		<?php include('footer.php'); ?>
	</div>

	
	
</body>


	<script type="text/javascript">
		$("#slider").carouFredSel({
			width: 656,
			height: 260,
			prev: '#prev',
	        next: '#next',
	        pagination: "#pager",
			items: 1,
			scroll: {
				fx: 'crossfade',
				items: 1,
				duration: 1000,
				pauseOnHover: true
			}
		});
	</script>


</html>