<?php  
include 'sambungan.php';
?>

<link rel="stylesheet" type="text/css" href="senarai.css">
<table>
	<caption>SENARAI KELAS</caption>
	<tr>
		<th>ID</th>
		<th>Nama</th>
	</tr>

	<?php  
	$sql = "SELECT * FROM kelas";
	$result = mysqli_query($sambungan, $sql);
	while($kelas = mysqli_fetch_array($result)) {
		echo '<tr>
				<td>'.$kelas["idkelas"].'</td>
				<td>'.$kelas["namakelas"].'</td>
			  </tr>';
	}
	?>

</table>