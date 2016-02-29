<?php 
	$link = new mysqli('localhost','root','','hospital');
	
	$query = "select * from species ";
	$result = $link->query($query);
	
	$species = $result->fetch_all(MYSQLI_ASSOC);
?>