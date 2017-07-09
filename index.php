<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PROJET ORACLE</title>
		<link href="/agencetouristique/css/bootstrap.min.css" rel="stylesheet">
		<link href="/agencetouristique/css/style.css" rel="stylesheet">
	</head>
	<body>
		
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="#"><i class="glyphicon glyphicon-home glyphicon-left"></i>Accueil</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php 

							session_start();
							if (!empty($_SESSION['pseudo'])) { 

						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>Mon compte <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Mon compte</li>
								<li><a href="#"><i class="glyphicon glyphicon-list-alt glyphicon-left"></i>Mes informations</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="/agencetouristique/Controller/deconnectionMembre.php" class="btn-rouge" ><i class="glyphicon glyphicon-off glyphicon-left"></i>Deconnexion</a></li>
							</ul>
						</li>
						<?php } else { ?>
							<li><a href="#" data-toggle="modal" data-target="#popupConnexion">Connexion</a></li>
							<li><a href="#" data-toggle="modal" data-target="#popupInscription">Inscription</a></li>
						<?php } ?>
					</ul>
					<ul class="nav navbar-nav navbar-right dropdown-rouge">
						<?php
							 	
							 if (!empty($_SESSION['role']) and $_SESSION['role'] == "administateur") { ?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog glyphicon-left"></i>Administration <span class="caret"></a>
									<ul class="dropdown-menu">
										<li class="dropdown-header">Administration</li>
										<li><a href="#"><i class="glyphicon glyphicon-wrench glyphicon-left"></i>Configurations</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="/agencetouristique/Views/gestionUsers.php"><i class="glyphicon glyphicon-th-list glyphicon-left"></i>Utilisateurs</a></li>
									</ul>
								</li>
							<?php }
						?>
					</ul>
				</div>
			</div>
		</nav>
		

		<?php
			include('Views/Popups/P_Inscription.php');
			include('Views/Popups/P_Connexion.php');
			//include('Views/Popups/P_Message.php');
		?>

		<script src="/agencetouristique/js/JQuery.min.js"></script>
		<script src="/agencetouristique/js/bootstrap.min.js"></script>
		<script src="/agencetouristique/js/script.js"></script>
	</body>
</html>
