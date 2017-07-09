<?php

include ("connectDB.php");
	ini_set('display_errors', 1);
	$conn =connect();

		
	
	$pseudo = $_POST['Pseudo'];
	$mdp = $_POST['MotDePasse'];
	$mail = $_POST['AdresseCourriel'];
	$dateNaiss = $_POST['dateNaiss'];
	$nom = $_POST['Nom'];
	$prenom = $_POST['Prenom'];
	echo $prenom;
	echo $nom;
	echo $mail;
	echo $mdp;
	echo $dateNaiss;
	// insertion en base
	try{
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql ="Insert into CLIENT VALUES ( 5,'".$nom."','".$prenom."','".$dateNaiss."','".$mdp."','client', '".$pseudo."', '".$mail."')";
		$conn->exec($sql);
		echo "row insert";
	}
	catch(PDOException $e){
		    echo ($e->getMessage());
		    echo "Pas de connection";

		}

		header('Location: ../index.php');



	

	
	
	   
	    
	

?>