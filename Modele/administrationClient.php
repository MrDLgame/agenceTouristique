<?php
	function recupPseudo(){
	include ("../controller/connectDB.php");
	ini_set('display_errors', 1);
	$conn =connect();
	$req = $conn->prepare("SELECT PSEUDO FROM CLIENT WHERE ROLE ='client'");
	$req->execute();

	while($resultat = $req->fetch()){

	echo '<option>'.$resultat['PSEUDO'].'</option>';
	print("\n");
	 }

	}


	function infoClient()
	{
		
	
		 
	$pseudo = $_GET['pseudoSelect'];	
	include ("../controller/connectDB.php");
	ini_set('display_errors', 1);
	$conn =connect();
	$req = $conn->prepare("SELECT PSEUDO, NOM, PRENOM, MAIL, MDP,  FROM CLIENT WHERE ROLE ='client' AND PSEUDO='".$pseudo."'");
	$req->execute();
	$resultat = $req->fetch();
	echo $resultat['PSEUDO'];
	echo $resultat['NOM'];
	echo $resultat['PRENOM'];
	echo $resultat['MAIL'];
	echo $resultat['MDP'];
	
	}

?>