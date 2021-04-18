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
			<caption>SENARAI NAMA GURU</caption>
			<tr>
				<th>ID Guru</th>
				<th>Nama</th>
			</tr>
			<?php  
			include 'sambungan.php';

			$sql = "SELECT idguru, namaguru FROM guru";
			$result = mysqli_query($sambungan,$sql);
			while($row=mysqli_fetch_array($result)) {
				echo '
					<tr>
						<td>'.$row["idguru"].'</td>
						<td>'.$row["namaguru"].'</td>
					</tr>
				';
			}
			?>

		</table>
	</div>

</div>