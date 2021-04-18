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
			<caption>SENARAI KELAS</caption>
			<tr>
				<th>ID Kelas</th>
				<th>Nama Kelas</th>
			</tr>
			<?php  
			include 'sambungan.php';

			$sql = "SELECT idkelas, namakelas FROM kelas";
			$result = mysqli_query($sambungan,$sql);
			while($row=mysqli_fetch_array($result)) {
				echo '
					<tr>
						<td>'.$row["idkelas"].'</td>
						<td>'.$row["namakelas"].'</td>
					</tr>
				';
			}
			?>

		</table>
	</div>

</div>