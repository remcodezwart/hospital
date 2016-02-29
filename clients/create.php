<?php
	include "../common/header.php";
?>
<h1>Add client</h1>
	<form method="post" action="create_logic.php">
		<div>
			<label for="name">Name:</label>
			<input required type="text" id="name" name="name" >
		</div>
		<div>
			<label for="name">lastName:</label>
			<input required type="text" id="species" name="lastname" >
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>

<?php
	include "../common/footer.php";
?>