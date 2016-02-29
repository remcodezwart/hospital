<?php
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patient.id, patient.species, patient.name, patient.status, patient.geslacht, patient.eigenaar, species.name, species.id
	FROM patient
	INNER JOIN species 
	ON patient.species=species.id; ";
	$result = $db->query($query);
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>