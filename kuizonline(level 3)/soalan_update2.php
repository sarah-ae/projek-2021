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
		<h3 class="panjang">KEMASKINI SOALAN</h3>
		<form class="panjang" action="soalan_update2.php" method="post">
			<table>
				<tr>
					<td>Soalan</td>
					<td>
						<select name="idsoalan">
							<?php  
							$sql = "SELECT * FROM soalan";
							$data = mysqli_query($sambungan,$sql);
							while($soalan=mysqli_fetch_array($data)) {
								echo "<option value='$soalan[idsoalan]'>$soalan[namasoalan]</option>";
							}
							?>
						</select>
					</td>
				</tr>
			</table>
			<button class="cari" type="submit">Cari</button>
		</form>

		<?php  
		if(isset($_POST['idsoalan'])) {
			$idsoalan = $_POST['idsoalan'];
			$sql = "SELECT * FROM soalan WHERE idsoalan = '$idsoalan'";
			$result = mysqli_query($sambungan,$sql);
			$soalan = mysqli_fetch_array($result);

			$idsoalan = $soalan['idsoalan'];
			$namasoalan = $soalan['namasoalan'];
			$pilihana = $soalan['pilihana'];
			$pilihanb = $soalan['pilihanb'];
			$pilihanc = $soalan['pilihanc'];
			$jawapan = $soalan['jawapan'];
			$idguru = $soalan['idguru'];
			$idtopik = $soalan['idtopik'];
			$jenis = $soalan['jenis'];

		} else {
			$idsoalan = "";
			$namasoalan = "";
			$pilihana = "";
			$pilihanb = "";
			$pilihanc = "";
			$jawapan = "";
			$idguru = "";
			$idtopik = "";
			$jenis = "";
		}
		?>

		<h3 class="panjang">KEMASKINI SOALAN</h3>
		<form class="panjang" action="soalan_update.php" method="post">
			<table>
				<tr>
					<td>ID Soalan</td>
					<td><input type="text" name="idsoalan" value="<?php echo $idsoalan; ?>" required></td>
				</tr>
				<tr>
					<td>Soalan</td>
					<td><input type="text" name="namasoalan" value="<?php echo $namasoalan; ?>"></td>
				</tr>
				<tr>
					<td>Pilihan A</td>
					<td><input type="text" name="pilihana" value="<?php echo $pilihana; ?>"></td>
				</tr>
				<tr>
					<td>Pilihan B</td>
					<td><input type="text" name="pilihanb" value="<?php echo $pilihanb; ?>"></td>
				</tr>
				<tr>
					<td>Pilihan C</td>
					<td><input type="text" name="pilihanc" value="<?php echo $pilihanc; ?>"></td>
				</tr>

				<tr>
					<td>Jawapan</td>
					<td><input type="text" name="jawapan" value="<?php echo $jawapan; ?>"></td>
				</tr>

				<tr>
					<td>Guru</td>
					<td>
						<select name="idguru">
							<?php  
							$sql = "SELECT * FROM guru";
							$data = mysqli_query($sambungan,$sql);
							while($guru=mysqli_fetch_array($data)) {
								if($guru['idguru'] == $idguru)
									echo "<option value='$guru[idguru]' selected>$guru[namaguru]</option>";
								else
									echo "<option value='$guru[idguru]'>$guru[namaguru]</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Topik</td>
					<td>
						<select name="idtopik">
							<?php  
							$sql = "SELECT * FROM topik";
							$data = mysqli_query($sambungan,$sql);
							while($topik=mysqli_fetch_array($data)) {
								if($topik['idtopik'] == $idtopik)
									echo "<option value='$topik[idtopik]' selected>$topik[namatopik]</option>";
								else
									echo "<option value='$topik[idtopik]'>$topik[namatopik]</option>";
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis Soalan</td>
					<td>
						<select name="jenis">
							<?php  
							if($jenis == 1)
								echo "<option value='1' selected>Soalan Objektif</option>";
							else
								echo "<option value='1'>Soalan Objektif</option>";
							if($jenis == 2)
								echo "<option value='2' selected>Soalan Benar/Salah</option>";
							else
								echo "<option value='2'>Soalan Benar/Salah</option>";
							if($jenis == 3)
								echo "<option value='3' selected>Isi tempat kosong</option>";
							else
								echo "<option value='3'>Isi tempat kosong</option>";
							?>
						</select>
					</td>
				</tr>
			</table>
			<button class="update" type="submit">Update</button>
		</form>
	</div>

</div>