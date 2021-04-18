<?php  
include 'keselamatan.php';
?>

<link rel="stylesheet" type="text/css" href="senarai.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_guru.php'; ?>

	<div class="kandungan">
		<table>
			<caption>SENARAI SOALAN</caption>
			<tr>
				<th>ID Soalan</th>
				<th>Soalan</th>
				<th>Pilihan A</th>
				<th>Pilihan B</th>
				<th>Pilihan C</th>
				<th>Jawapan</th>
				<th>ID Guru</th>
				<th>ID Topik</th>
				<th>Jenis</th>
			</tr>
			<?php  
			include 'sambungan.php';

			$sql = "SELECT * FROM soalan";
			$result = mysqli_query($sambungan,$sql);
			while($row=mysqli_fetch_array($result)) {
				echo '
					<tr>
						<td>'.$row["idsoalan"].'</td>
						<td>'.$row["namasoalan"].'</td>
						<td>'.$row["pilihana"].'</td>
						<td>'.$row["pilihanb"].'</td>
						<td>'.$row["pilihanc"].'</td>
						<td>'.$row["jawapan"].'</td>
						<td>'.$row["idguru"].'</td>
						<td>'.$row["idtopik"].'</td>
						<td>'.$row["jenis"].'</td>
					</tr>
				';
			}
			?>

		</table>
	</div>

</div>