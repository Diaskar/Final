            <table>
				<tr>
					<td><b>ID |</b></td>
					<td><b>NAME |</b></td>
					<td><b>SURNAME |</b></td>
					<td><b>EMAIL |</b></td>
				</tr>
			</table>
<?php 
	include "conn.php";
	$sql = "select * from reg";
	$result = $db->query($sql);
	$var = 0;
	while(mysqli_num_rows($result)>$var){
		$row = $result->fetch_array();
		echo "
			<table>
				<tr>
					<td>$row[id] |</td>
					<td>$row[name] |</td>
					<td>$row[surname] |</td>
					<td>$row[email] </td>
				</tr>
			</table>
			<a href=\"del.php?id=$row[id]\">delete</a>
			<form method='post' action=\"update.php?id=$row[id]\">
				<input type='text' name='name' placeholder='update name'>
				<input type='submit' value='update'>
			</form>
		";
		$var++;
	}
 ?>