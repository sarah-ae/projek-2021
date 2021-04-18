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
		<h3 class="panjang">KEMASKINI GURU</h3>
		<form class="panjang" action="guru_update.php" method="post">
			<table>
				<tr>
					<td>ID Guru</td>
					<td><input type="text" name="idguru" placeholder="G01" required></td>
				</tr>
				<tr>
					<td>Nama Guru</td>
					<td><input type="text" name="namaguru"></td>
				</tr>
				<tr>
					<td>Passowrd</td>
					<td><input type="text" name="password" placeholder="max: 8 char" required></td>
				</tr>
			</table>
			<button class="update" type="submit">Update</button>
		</form>
	</div>

</div>