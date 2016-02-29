<?php
	include "../common/header.php";
?>
<h1>Add species</h1>
	<form method="post" action="create_logic.php">
		<div>
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