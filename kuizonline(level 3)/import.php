<?php  
include 'keselamatan.php';
include 'sambungan.php';

$namajadual = $_POST['namatable'];
$namafail = $_FILES['namafail']['name'];

$fail = fopen($namafail, "r");
while(!feof($fail)) {

	$medan = explode(",", fgets($fail));

	if($namajadual === "pelajar") {
		$idpelajar = $medan[0];
		$namapelajar = $medan[1];
		$idkelas = $medan[2];
		$password = $medan[3];
		$sql = "INSERT INTO pelajar VALUES('$idpelajar','$namapelajar','$idkelas','$password')";
		mysqli_query($sambungan,$sql);
	}

	if($namajadual === "soalan") {
		$idsoalan = $medan[0];
		$namasoalan = $medan[1];
		$pilihana = $medan[2];
		$pilihanb = $medan[3];
		$pilihanc = $medan[4];
		$jawapan = $medan[5];
		$idguru = $medan[6];
		$idtopik = $medan[7];
		$jenis = $medan[8];
		$sql = "INSERT INTO soalan VALUES('$idsoalan','$namasoalan','$pilihana','$pilihanb','$pilihanc','$jawapan','$idguru','$idtopik','$jenis')";
		mysqli_query($sambungan,$sql);
	}

}

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