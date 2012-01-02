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

    <?php 
    if(empty($_GET)){
    	$color = '#FFF';
    }
    else {
    	if($_GET['num']==1){
    		$color = '#009DD7';
    	}
    	if($_GET['num']==2){
    		$color = '#c20989';
    	}
 	  	if($_GET['num']==3){
    		$color = '#d4d700';
    	}
    	if($_GET['num']==4){
    		$color = '#ff9600';
    	}
    	if($_GET['num']==5){
    		$color = '#83c209';
    	}
    }
    
    	
    ?>


    <style type="text/css">
    body{
    	background-color: <?php echo $color ?>; 
    }
    </style>

</head>
<body>
	<?php include('header.php'); ?>

	<div id="main">
		<div id="page">
		<img src="http://lorempixel.com/300/400/nature/Vignette">
		<h2>Lorem Ipsum</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dui et nunc faucibus gravida nec in nunc. Nam aliquet bibendum lorem, a sagittis ipsum tristique et. Sed eu odio orci. Vivamus volutpat ligula ac mi ornare sodales. Donec ut lobortis nulla. Phasellus lacinia massa orci. Suspendisse aliquam interdum mollis. Pellentesque suscipit suscipit lorem sit amet blandit. Nam sollicitudin molestie porttitor. Pellentesque sit amet elit a nisi porta pellentesque. Etiam faucibus rutrum blandit. Praesent congue, sapien sit amet hendrerit congue, ipsum dolor adipiscing nisi, tristique auctor libero lorem id eros.
		<br><br>
		Curabitur sed lectus nulla, nec ornare nulla. Etiam tempor vestibulum adipiscing. Nulla mauris erat, hendrerit vitae sodales ac, posuere vel arcu. Fusce rhoncus congue ligula, quis porta tortor ultricies vel. Curabitur posuere, quam ac pulvinar fermentum, ipsum mauris luctus diam, vel iaculis erat dui quis sapien. Nulla non tincidunt orci. Donec a augue erat. Fusce vel dictum sem.
		<br><br>
		Nulla vehicula dolor quis leo convallis et luctus mi volutpat. Mauris sed risus pretium libero feugiat tempus. Nam quis lorem erat. Etiam diam mi, scelerisque adipiscing tempus ut, sollicitudin vel erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum in magna metus. Etiam porta rutrum dui, sed sagittis est fermentum eget. Praesent faucibus neque a sapien aliquam sit amet consectetur lorem dapibus. In a lectus mauris, ut rutrum urna. Sed pharetra dui in nisi placerat in tempor enim aliquam.
		<br><br>
		Mauris turpis quam, sagittis a viverra eget, auctor non magna. Sed lacinia laoreet bibendum. Praesent dignissim elementum arcu, ut placerat augue fringilla id. Curabitur lacinia gravida mi ac volutpat. Cras ullamcorper bibendum sapien, eget sagittis felis bibendum eget. Aliquam erat volutpat. Curabitur eget eros enim, vel vehicula mauris. Donec ut metus in libero vehicula feugiat in id velit. In hac habitasse platea dictumst. Morbi accumsan ultrices elementum. Nulla facilisi. Aenean aliquam lobortis blandit. Vestibulum ac nisi id turpis tincidunt bibendum eget eget urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed in nisi nulla, suscipit condimentum est.
		<br><br>
		Pellentesque lacinia, nulla elementum sagittis cursus, mauris sapien convallis urna, sit amet dictum est nisl congue odio. Etiam porttitor purus vel massa suscipit aliquet in ut ipsum. Nulla suscipit porta convallis. Proin vel erat massa, id iaculis ligula. Ut ante arcu, pellentesque rutrum feugiat sit amet, volutpat sed metus. Etiam pretium dapibus bibendum. Phasellus vitae velit nulla, id rhoncus urna. Nullam ultricies pharetra eros, ut tempor est imperdiet vel. </p>
		</div>

		<?php include('footer.php'); ?>
	</div>

	
	
</body>

</html>