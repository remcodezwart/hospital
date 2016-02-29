<?php
	include "clients_logic.php";
	include "../common/header.php";
?>
	<h1>Clients</h1>
	<a href="create.php">create</a>
<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>last name</th>
			</tr>
		</thead>
</table>
<?php
	foreach($client as $client):
?>
	<table>
		<thead>
			<tr>
				<th><?php echo $client['naam'] ?> </th>
				<th><?php echo $client['achternaam']?></th>
				<td class="center"><a href="client_edit.php?id=<?php echo $client['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?php echo $client['id']?>">delete</a></td>
			</tr>
		</thead>
</table>
<?php
   endforeach
?>
	
	
	
	
	
<?php
	include "../common/footer.php";
?>