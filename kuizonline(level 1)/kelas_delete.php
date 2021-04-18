<?php  
include 'sambungan.php';

$idkelas = $_POST['idkelas'];

$sql = "DELETE FROM kelas WHERE idkelas='$idkelas'";
$result = mysqli_query($sambungan, $sql);

if($result == true)
	echo "Berjaya delete";
else
	echo "tidak berjaya delete";

?>