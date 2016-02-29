<?php 
	$link = new mysqli('localhost','root','','hospital');
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	
	$sql = "INSERT INTO `client`(`naam`, `achternaam`) VALUES ('$name', '$lastname')";
    mysqli_query($link, $sql);
	header('Location: index.php');
?>