<?php
	$commentaire = $image = "";

	function securisation($donnee){
		$donnee = stripslashes($donnee);
		$donnee	= strip_tags($donnee);
		$donnee = trim($donnee);
		return $donnee;
	}
	


	function insertData( $db_table,$db_values,$db_inconnu,$data_values,$db){
		 $query=$db->prepare("INSERT INTO ".$db_table." (". $db_values.") VALUES(".$db_inconnu .")");
		 	$result=$query->execute($data_values);
		 	return $result;
	}

	// function getAllData($connexion,$db_table){
	// 	$query=$connexion->prepare("SELECT * FROM  $db_table");
	// 	$query->execute([]);
	// 	return $query->fetchAll();

	// }

?>