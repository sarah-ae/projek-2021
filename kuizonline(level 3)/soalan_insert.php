<?php  
include 'keselamatan.php';
include 'sambungan.php';

$idsoalan = $_POST['idsoalan'];
$namasoalan = $_POST['namasoalan'];
$pilihana = $_POST['pilihana'];
$pilihanb = $_POST['pilihanb'];
$pilihanc = $_POST['pilihanc'];
$jawapan = $_POST['jawapan'];
$idguru = $_POST['idguru'];
$idtopik = $_POST['idtopik'];
$jenis = $_POST['jenis'];
$sql = "INSERT INTO soalan VALUES('$idsoalan','$namasoalan','$pilihana','$pilihanb','$pilihanc','$jawapan','$idguru','$idtopik','$jenis')";
$result = mysqli_query($sambungan,$sql);
?>

<link rel="stylesheet" type="text/css" href="borang.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_guru.php'; ?>

	<div class="kandungan">
		<div id="berjaya" style="display: none;">
			<h3 class="panjang">MESEJ</h3>
			<h2 class="mesej">Berjaya tambah</h2>
		</div>

		<div id="tidak" style="display: none;">
			<h3 class="panjang">MESEJ</h3>
			<h2 class="mesej">Tidak berjaya tambah</h2>
		</div>

	</div>
</div>

<?php  
if(mysqli_affected_rows($sambungan) > 0)
	echo "<script>document.getElementById('berjaya').style.display='block';</script>";
else
	echo "<script>document.getElementById('tidak').style.display='block';</script>";
?>