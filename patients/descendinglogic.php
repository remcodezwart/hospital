<?php
	$db = new mysqli('localhost','root','','hospital');

	$query = "select * from patient ORDER BY id DESC;";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>