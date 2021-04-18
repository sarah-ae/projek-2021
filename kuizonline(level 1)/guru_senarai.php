<?php  
include 'sambungan.php';
?>

<link rel="stylesheet" type="text/css" href="senarai.css">
<table>
	<caption>SENARAI NAMA GURU</caption>
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Password</th>
	</tr>

	<?php  
	$sql = "SELECT * FROM guru";
	$result = mysqli_query($sambungan, $sql);
	while($guru = mysqli_fetch_array($result)) {
		echo '<tr>
				<td>'.$guru["idguru"].'</td>
				<td>'.$guru["namaguru"].'</td>
				<td>'.$guru["password"].'</td>
			  </tr>';
	}
	?>

</table>