<?php
	require_once "edit.logic.php";
	include "../common/header.php";
	require_once "species_show.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
		<label>species</label>
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
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>