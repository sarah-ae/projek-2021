<?php  
include 'keselamatan.php';
?>

<link rel="stylesheet" type="text/css" href="borang.css">
<link rel="stylesheet" type="text/css" href="button.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_guru.php'; ?>

	<div class="kandungan">
		<h3 class="panjang">KEMASKINI TOPIK</h3>
		<form class="panjang" action="topik_update.php" method="post">
			<table>
				<tr>
					<td>ID Topik</td>
					<td><input type="text" name="idtopik" placeholder="T01" required></td>
				</tr>
				<tr>
					<td>Nama Topik</td>
					<td><input type="text" name="namatopik"></td>
				</tr>
			</table>
			<button class="update" type="submit">Update</button>
		</form>
	</div>

</div>