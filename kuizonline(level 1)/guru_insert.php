<?php  
include 'sambungan.php';

$idguru = $_POST['idguru'];
$namaguru = $_POST['namaguru'];
$password = $_POST['password'];

$sql = "INSERT INTO guru VALUES('$idguru', '$namaguru', '$password')";
$result = mysqli_query($sambungan, $sql);

if ($result == true)
	echo "berjaya tambah";
else
	echo "tidak berjaya tambah";


?>