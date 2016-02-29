<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$owner = $db->escape_string($_POST["owner"]);
		$sex = $db->escape_string($_POST["sex"]);
		// Prepare query and execute
		$query = "insert into patient (name, species, status,geslacht,eigenaar) values ('$name','$species','$status','$sex','$owner')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>