<?php 
	$link = new mysqli('localhost','root','','hospital');
	$id = $_POST['id'] ;
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];


    mysqli_query($link,"UPDATE client SET naam='$name',achternaam='$lastname' WHERE id='$id'") ;
	header('Location: index.php');
?>