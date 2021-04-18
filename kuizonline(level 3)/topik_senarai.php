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
			<caption>SENARAI TOPIK</caption>
			<tr>
				<th>ID Topik</th>
				<th>Nama Topik</th>
			</tr>
			<?php  
			include 'sambungan.php';

			$sql = "SELECT idtopik, namatopik FROM topik";
			$result = mysqli_query($sambungan,$sql);
			while($row=mysqli_fetch_array($result)) {
				echo '
					<tr>
						<td>'.$row["idtopik"].'</td>
						<td>'.$row["namatopik"].'</td>
					</tr>
				';
			}
			?>

		</table>
	</div>

</div>