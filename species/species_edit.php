<?php
	include "../common/header.php";
?>
<h1>Edit species</h1>
	<form method="post" action="edit.php">
		<div>
			<input type="hidden" name="id" value="<?php if(isset($_GET['id'])){;
			echo $_GET['id'] ;
			};
			?>">
			<label for="name">Name:</label>
			<input required type="text" id="name" name="species" >
		</div>
		<div>
			<label for="name">discription:</label>
			<input required type="text" id="species" name="discription" >
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>

<?php
	include "../common/footer.php";
?>