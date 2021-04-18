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
		<h3 class="panjang">PILIHAN JENIS LAPORAN</h3>
		<form class="panjang" action="laporan_cetak.php" method="post">
			<select id="pilihan" name="pilihan" onchange="papar_pilihan()">
				<option value="1">Semua Kelas dan Peratus</option>
				<option value="2">Mengikut Kelas</option>
				<option value="3">Mengikut peratus</option>
				<option value="4">Mengikut Kelas dan Peratus</option>
			</select><br>

			<div id="kelas" style="display: none;">
				<select name="idkelas">
					<?php 
					include 'sambungan.php';
					$sql = "SELECT * FROM kelas";
					$data = mysqli_query($sambungan,$sql);
					while($kelas=mysqli_fetch_array($data)) {
						echo "<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";
					}
					?>
				</select>
			</div>

			<div id="peratus" style="display: none;">
				<select name="peratus">
					<option value="80">Lebih 80</option>
					<option value="50">Lebih 50</option>
					<option value="0">Kurang 50</option>
				</select>
			</div>
			<button class="papar" type="submit">Papar</button>
		</form>
		<script>
			function papar_pilihan() {
				var pilih = document.getElementById('pilihan').value;
				var paparKelas = 'none';
				var paparPeratus = 'none';
				if(pilih == 1) {
					paparKelas = 'none';
					paparPeratus = 'none';
				} else if(pilih == 2) {
					paparKelas = 'block';
					paparPeratus = 'none';
				} else if(pilih == 3) {
					paparKelas = 'none';
					paparPeratus = 'block';
				} else if(pilih == 4) {
					paparKelas = 'block';
					paparPeratus = 'block';
				}
				document.getElementById('kelas').style.display = paparKelas;
				document.getElementById('peratus').style.display = paparPeratus;
			}
		</script>
	</div>

</div>