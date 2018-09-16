<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curriculum Vitae</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="customm.css">
	<script src="https://unpkg.com/scrollreveal"></script>
</head>
<body class="container-fluid">
	<div class="row base">
		<div class="col-sm-4 darkest">
			<img src="img/inst.jpg" width="75%" height="auto">
		</div>
		<div class="col-sm-8">
			<h3 class="important">Développeur Web Full-Stack Junior</h3>
			<p>Développeur Junior en recherche de connaissances d'un maximum de techno pour être polyvalent, petit plus coté programmation.</p>
			<h2 class="title">Compétences</h2>
			<p>Maîtriser des outils de développement <br><br>
				Savoir modéliser des projets <br><br>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#framework">
				Utiliser des framework </button><br><br>
			Repérer et corriger des problèmes sur un site</p>
		</div>
	</div>
	<script>ScrollReveal().reveal('.base',{delay:100});</script>
	<div class="row partone">
		<div class="col-sm-4 darkest">
			<div class="restart">
				<p class="icon"><i class="fas fa-male"></i>Janvier Valentin</p>
				<p class="icon"><i class="fas fa-birthday-cake"></i>Née le 04/02/1997 (21 ans)</p>
				<p class="icon"><i class="fas fa-car"></i>Permis B + véhicule</p>
				<p class="icon"><i class="fas fa-envelope"></i>Alencruserxx@hotmail.fr</p>
				<p class="icon"><i class="fas fa-phone"></i> 06 58 05 19 18</p>
				<p class="icon"><i class="fas fa-map-marker-alt"></i>13 Allée de Couechot 31260 Mane</p>
				<p class="icon"><i class="fas fa-globe-americas"></i>https://github.com/Alencruser</p>
			</div>
		</div>
		<div class="col-sm-8">
			<h2 class="title">Expériences professionnelles</h2>
			<ul>
				<li><p>L'art du pain : 2014-2015 / Saint-Gaudens : Apprenti boulanger</p></li>
				<li><p>L'épi d'or : 2015 / Saint-Lary-Soulan : Apprenti boulanger</p></li>
				<li><p>La boulangeoise : 2015-2016 / Saint-Gaudens : Apprenti boulanger</p></li>
			</ul>
		</div>
	</div>
	<script>ScrollReveal().reveal('.partone',{delay:300});</script>
	<div class="row parttwo">
		<div class="col-sm-4 darkest">

		</div>
		<div class="col-sm-8">
			<h2 class="title">Formation(s)</h2>
			<ul>
				<img class="rounded float-right" src="img/simplon.png" width="15%" height="auto">
				<li><h4>Simplon St-Gaudens Promo 2018-2019</h4>
					<p>Développeur Logiciel Niveau III</p></li>
					<li><h4>CFA du Comminges 2016 :</h4>
						<p>CAP Boulanger</p></li>
					</ul>
					<h2 class="title">Loisirs</h2>
					<ul>
						<li><h4>Intelligence Artificielle</h4></li>
						<li><h4>Psychologie</h4></li>
						<li><h4>Déduction</h4></li>
						<li><h4>Piano</h4></li>
						<li><h4>Chant</h4></li>
						<li><h4>Jeux-vidéos</h4></li>
					</ul>
				</div>
			</div>
			<script>ScrollReveal().reveal('.parttwo',{delay:300});</script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
			<div class="modal fade" id="framework" tabindex="-1" role="dialog" aria-labelledby="frameworkLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="frameworkLabel">Framework déjà utilisés</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Express.js <hr>
							Symfony <hr>
							PhpUnit <hr>
							JQuery
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>