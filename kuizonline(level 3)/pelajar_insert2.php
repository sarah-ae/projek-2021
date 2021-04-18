<?php  
include 'keselamatan.php';
include 'sambungan.php';
?>

<link rel="stylesheet" type="text/css" href="borang.css">
<link rel="stylesheet" type="text/css" href="button.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_guru.php'; ?>

	<div class="kandungan">
		<h3 class="panjang">TAMBAH PELAJAR</h3>
		<form class="panjang" action="pelajar_insert.php" method="post">
			<table>
				<tr>
					<td>ID Pelajar</td>
					<td><input type="text" name="idpelajar" placeholder="P01" required></td>
				</tr>
				<tr>
					<td>Nama Pelajar</td>
					<td><input type="text" name="namapelajar"></td>
				</tr>
				<tr>
					<td>ID Kelas</td>
					<td>
						<select name="idkelas">
							<?php  
							$sql = "SELECT * FROM kelas";
							$data = mysqli_query($sambungan,$sql);
							while($kelas=mysqli_fetch_array($data)) {
								echo "<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Passowrd</td>
					<td><input type="text" name="password" placeholder="max: 8 char" required></td>
				</tr>
			</table>
			<button class="tambah" type="submit">Tambah</button>
		</form>
	</div>

</div>