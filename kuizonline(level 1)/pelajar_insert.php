<?php  
include 'sambungan.php';

$idpelajar = $_POST['idpelajar'];
$namapelajar = $_POST['namapelajar'];
$idkelas = $_POST['idkelas'];
$password = $_POST['password'];

$sql = "INSERT INTO pelajar VALUES('$idpelajar', '$namapelajar', '$idkelas', '$password')";
$result = mysqli_query($sambungan, $sql);

if ($result == true)
	echo "berjaya tambah";
else
	echo "tidak berjaya tambah";


?>