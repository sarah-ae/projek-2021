<?php  
include 'sambungan.php';

$idsoalan = $_POST['idsoalan'];
$namasoalan = $_POST['namasoalan'];
$pilihana = $_POST['pilihana'];
$pilihanb = $_POST['pilihanb'];
$pilihanc = $_POST['pilihanc'];
$jawapan = $_POST['jawapan'];
$idguru = $_POST['idguru'];

$sql = "UPDATE soalan SET namasoalan='$namasoalan', pilihana='$pilihana', pilihanb='$pilihanb', pilihanc='$pilihanc', jawapan='$jawapan', idguru='$idguru' WHERE idsoalan='$idsoalan' ";
$result = mysqli_query($sambungan, $sql);

if ($result == true)
	echo "berjaya kemaskini";
else
	echo "tidak berjaya kemaskini";


?>