<?php 
// Hachage du mot de passe
	
	include ("connectDB.php");
	ini_set('display_errors', 1);
	$conn =connect();

		
	
	$pseudo = $_POST['Pseudo'];
	$mdp = $_POST['MotDePasse'];
	echo $pseudo;
	echo $mdp;

	// Vérification des identifiants
	$req = $conn->prepare(" '". $pseudo."' AND MDP = '". $mdp ."'");
	$req->execute();



	if (!$resultat)
	{
	    echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{

	    session_start();
	    while($resultat = $req->fetch())
		{
		
			$_SESSION['role'] = $resultat['role'];
			echo $_SESSION['role'];
		
		}
	    
	    $_SESSION['pseudo'] = $pseudo;


	   
	    //header('Location: ../index.php');
	    
	


?>