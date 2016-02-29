<?php
	include "../common/header.php";
?>
<h1>Edit client</h1>
	<form method="post" action="edit.php">
		<div>
			<input type="hidden" name="id" value="<?php if(isset($_GET['id'])){;
			echo $_GET['id'];
			} ?>">
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