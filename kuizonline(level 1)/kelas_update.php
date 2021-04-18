<?php  
include 'sambungan.php';

$idkelas = $_POST['idkelas'];
$namakelas = $_POST['namakelas'];

$sql = "UPDATE kelas SET namakelas='$namakelas' WHERE idkelas='$idkelas'";
$result = mysqli_query($sambungan, $sql);

if($result == true)
	echo "Berjaya kemaskini";
else
	echo "tidak berjaya kemaskini";

?>