<?php
	$link = new mysqli('localhost','root','','hospital');
	$id = $_GET['id'] ;
	$query = "delete from client where id=$id";
	$result = $link->query($query);
	header('Location: index.php');

?>