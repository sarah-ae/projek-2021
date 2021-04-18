<?php  
include 'keselamatan.php';
include 'sambungan.php';

$idpelajar = $_POST['idpelajar'];
$sql = "DELETE FROM pelajar WHERE idpelajar = '$idpelajar'";
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
			<h2 class="mesej">Berjaya padam</h2>
		</div>

		<div id="tidak" style="display: none;">
			<h3 class="panjang">MESEJ</h3>
			<h2 class="mesej">Tidak berjaya padam</h2>
		</div>

	</div>
</div>

<?php  
if(mysqli_affected_rows($sambungan) > 0)
	echo "<script>document.getElementById('berjaya').style.display='block';</script>";
else
	echo "<script>document.getElementById('tidak').style.display='block';</script>";
?>