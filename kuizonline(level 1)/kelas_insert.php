<?php  
include 'sambungan.php';

$idkelas = $_POST['idkelas'];
$namakelas = $_POST['namakelas'];

$sql = "INSERT INTO kelas VALUES('$idkelas', '$namakelas')";
$result = mysqli_query($sambungan, $sql);

if($result == true)
	echo "Berjaya tambah";
else
	echo "tidak berjaya tambah";

?>