<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Maison de la nature et de l'environnement de l'Is&egrave;re</title>
	<link rel="stylesheet" type="text/css" media="screen" href="page.css" />

	<!-- Font provenant directement de Google -->
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>

	<!-- Chargement des javascript -->
	<script type="text/javascript" src="js/jquery-min.js"></script>
	<script type="text/javascript" src="js/caroufredsel.js"></script>

    <!-- Enabling HTML5 support for Internet Explorer -->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <style type="text/css">
    body{
    	background: url(images/mnei-bg.png) repeat-x;
    }
    </style>

</head>
<body>
	<?php include('header.php'); ?>

	<div id="main">
		<div id="page">
			<h2>CONTACT</h2>

            <form action="/contact" id="ContactIndexForm" method="post" accept-charset="utf-8">

            <div class="input text required">
                <label for="ContactName">Nom :</label>
                <input name="data[Contact][name]" maxlength="30" type="text" id="ContactName" required placeholder="Nom et Prénom">
                <span>Vous devez entrer un nom</span>
            </div>

            <div class="input text required">
                <label for="ContactMail">Email :</label>
                <input name="data[Contact][mail]" maxlength="50" type="email" id="ContactMail" required placeholder="mail@domain.com">
            </div>

            <div class="input textarea required">
                <label for="ContactContent">Message :</label>
                <textarea name="data[Contact][content]" cols="30" rows="6" id="ContactContent" required></textarea>
            </div>        

            <div class="submit">
                <input  type="submit" value="Envoyer"/></div>
            </form>
        </div>
		<?php include('footer.php'); ?>
	</div>

	
	
</body>

</html>