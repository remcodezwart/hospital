<?php
	$link = new mysqli('localhost','root','','hospital');
	$species = $_POST['species'];
	$discription = $_POST['discription'];
	
	$sql = "INSERT INTO `species`(`name`, `discription`) VALUES ('$species', '$discription')";
    mysqli_query($link, $sql);
	header('Location: index.php');
?>