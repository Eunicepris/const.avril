<?php
	$nom = $prenom = $contact = $commune = $email = $password = "";
	function securisation($donnee){
		$donnee = stripslashes($donnee);
		$donnee	= strip_tags($donnee);
		$donnee = trim($donnee);
		return $donnee;
	}
	


	function insertData( $db_table,$db_values,$db_inconnu,$data_values,$connexion){
		 $query=$connexion->prepare("INSERT INTO ".$db_table." (". $db_values.") VALUES(".$db_inconnu .")");
		 	$result=$query->execute($data_values);
		 	return $result;
	}


?>