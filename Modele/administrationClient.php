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
		include ("../controller/connectDB.php");
	ini_set('display_errors', 1);
	$conn =connect();
	
	}

?>