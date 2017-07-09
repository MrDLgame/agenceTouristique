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
	$req = $conn->prepare("SELECT PSEUDO, ROLE FROM CLIENT WHERE PSEUDO = '". $pseudo."' AND MDP = '". $mdp ."'");
	$req->execute();

	$resultat = $req->fetch();

	if (!$resultat)
	{
	    echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{
	    session_start();
	    $_SESSION['role'] = $resultat['ROLE'];
	    $_SESSION['pseudo'] = $pseudo;
	   
	    header('Location: ../index.php');
	    
	}


?>