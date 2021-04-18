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
		<h3 class="panjang">PADAM SOALAN</h3>
		<form class="panjang" action="soalan_delete.php" method="post">
			<table>
				<tr>
					<td>ID Soalan</td>
					<td><input type="text" name="idsoalan"></td>
				</tr>
			</table>
			<button class="padam" type="submit">Padam</button>
		</form>
	</div>

</div>