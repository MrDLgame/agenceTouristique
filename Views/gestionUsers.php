<?php
include("../index.php");
include("../Modele/administrationClient.php")
?>

<html lang="fr">
	
	<body>

		<select>
			<?php recupPseudo() ?>

		</select>



		<?php
			include('../Views/Popups/P_Inscription.php');
			include('../Views/Popups/P_Connexion.php');
			//include('Views/Popups/P_Message.php');
		?>

		
	</body<>

</html>