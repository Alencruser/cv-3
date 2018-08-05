<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curriculum Vitae</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand mx-auto" href="?page=comp">Compétences</a>
		<a class="navbar-brand mx-auto" href="?page=exp">Expériences</a>
		<a class="navbar-brand mx-auto" href="?page=formation">Formation(s)</a>
		<a class="navbar-brand mx-auto" href="?page=contact">Contact</a>
		<a class="navbar-brand mx-auto" href="?page=interet">Interêts</a>
	</nav>
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" style="height:400px" src="banner.jpg" alt="First slide">
			</div>
		</div>
	</div>
	<?php 
	if(!isset($_GET["page"])|| $_GET["page"]=="comp"){
		include "comp.php";
	}elseif($_GET["page"]=="exp"){
		include "exp.php";
	}elseif($_GET["page"]=="formation"){
		include "formation.php";
	}elseif($_GET["page"]=="contact"){
		include "contact.php";
	}else{
		include "interet.php";
	}
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>