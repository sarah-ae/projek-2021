<?php  
include 'sambungan.php';
?>

<link rel="stylesheet" type="text/css" href="senarai.css">
<table>
	<caption>SENARAI SOALAN</caption>
	<tr>
		<th>ID Soalan</th>
		<th>Nama Soalan</th>
		<th>Pilihan A</th>
		<th>Pilihan B</th>
		<th>Pilihan C</th>
		<th>Jawapan</th>
		<th>ID Guru</th>
	</tr>

	<?php  
	$sql = "SELECT * FROM soalan";
	$result = mysqli_query($sambungan, $sql);
	while($pelajar = mysqli_fetch_array($result)) {
		echo '<tr>
				<td>'.$pelajar["idsoalan"].'</td>
				<td>'.$pelajar["namasoalan"].'</td>
				<td>'.$pelajar["pilihana"].'</td>
				<td>'.$pelajar["pilihanb"].'</td>
				<td>'.$pelajar["pilihanc"].'</td>
				<td>'.$pelajar["jawapan"].'</td>
				<td>'.$pelajar["idguru"].'</td>
			  </tr>';
	}
	?>

</table>