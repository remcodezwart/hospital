<?php
	require_once "create.logic.php";
	include "../common/header.php";
	require_once "species_show.php"
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="species">
		<?php
				foreach($species as $species):
		?>
				<option><?php echo $species['name'] ?></option>
		<?php
			endforeach;
		?>
			</select>
		</div>
		<label for="name">gender:</label>
		<input type="radio" name="sex" value="male">Male
		<input type="radio" name="sex" value="female">Female
		<div>
			<label for="name">status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
			<label for="name">owner:</label>
			<textarea id="text" name="owner"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>