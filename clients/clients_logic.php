<?php 
	$link = new mysqli('localhost','root','','hospital');
	
	$query = "select * from client ";
	$result = $link->query($query);
	
	$client = $result->fetch_all(MYSQLI_ASSOC);
?>