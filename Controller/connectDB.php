<?php

      function connect(){
			include ("../Views/Include/config.php");
			$tns = "  
				(DESCRIPTION =
    				(ADDRESS_LIST =
      					(ADDRESS = (PROTOCOL = TCP)(HOST = ". $BDD_Adresse .")(PORT = ". $BDD_Port ."))
    				)
    			(CONNECT_DATA =
      				(SID=XE)
    			)
  				)
       		";
		$db_username = $BDD_Utilisateur;
		$db_password = $BDD_MDP;
		try{
    		$conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
    		
        return $conn;
		}catch(PDOException $e){
		    echo ($e->getMessage());
		    echo "Pas de connection";

		}
  }

		?>