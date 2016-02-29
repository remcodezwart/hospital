<?php
	$link = new mysqli('localhost','root','','hospital');
	$id = $_GET['id'] ;
	$query = "delete from species where id=$id";
	$result = $link->query($query);
	header('Location: index.php');

?>