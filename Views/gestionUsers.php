<?php
include("../index.php");
include("../Modele/administrationClient.php")
?>

<html lang="fr">
	
	<body>
		<form >
		<select id="pseudoSelect" name="pseudoSelect">
			<?php recupPseudo() ?>

		</select>
			
		<button type="submit" onclick="infoclient()" class="btn btn-success">ok<i class="glyphicon glyphicon-send glyphicon-right"></i></button>
		</form>
		
		<label>Nom:</label><input><?php $resus ?></input>
		<label>Prenom:</label><input></input>
		<label>Mail:</label><input></input>
		<label>Mot de passe:</label><input></input>
		<label>Pseudo:</label><input></input>



		<?php
			include('../Views/Popups/P_Inscription.php');
			include('../Views/Popups/P_Connexion.php');
			//include('Views/Popups/P_Message.php');
		?>

		
	</body<>

</html>