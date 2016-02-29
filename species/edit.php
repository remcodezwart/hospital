 <?php
	$link = new mysqli('localhost','root','','hospital');
	$id = $_POST['id'] ;
	$species = $_POST['species'];
	$discription = $_POST['discription'];
	
	
	 mysqli_query($link,"UPDATE species SET name='$species',discription='$discription' WHERE id='$id'") ;
	header('Location: index.php');
?>