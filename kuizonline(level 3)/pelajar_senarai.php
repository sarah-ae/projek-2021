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
			<caption>SENARAI NAMA PELAJAR</caption>
			<tr>
				<th>ID Pelajar</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Password</th>
			</tr>
			<?php  
			include 'sambungan.php';

			$sql = "SELECT * FROM pelajar";
			$result = mysqli_query($sambungan,$sql);
			while($row=mysqli_fetch_array($result)) {
				echo '
					<tr>
						<td>'.$row["idpelajar"].'</td>
						<td>'.$row["namapelajar"].'</td>
						<td>'.$row["idkelas"].'</td>
						<td>'.$row["password"].'</td>
					</tr>
				';
			}
			?>

		</table>
	</div>

</div>