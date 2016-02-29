<?php
	include "species_show.php";
	include "../common/header.php";
?>
	<h1>Species</h1>
	<a href="create.php">add species</a>
<table>
		<thead>
			<tr>
				<th>species</th>
				<th>Discription</th>
			</tr>
		</thead>
</table>
<?php
	foreach($species as $species):
?>
	<table>
		<thead>
			<tr>
				<th><?php echo $species['name'] ?> </th>
				<th><?php echo $species['discription']?></th>
				<td class="center"><a href="species_edit.php?id=<?php echo $species['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?php echo $species['id']?>">delete</a></td>
			</tr>
		</thead>
</table>
<?php
   endforeach
?>
	
<?php
	include "../common/footer.php";
?>