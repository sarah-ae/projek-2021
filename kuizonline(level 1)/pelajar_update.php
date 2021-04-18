<?php  
include 'sambungan.php';

$idpelajar = $_POST['idpelajar'];
$namapelajar = $_POST['namapelajar'];
$idkelas = $_POST['idkelas'];
$password = $_POST['password'];

$sql = "UPDATE pelajar SET namapelajar='$namapelajar', idkelas='$idkelas', password='$password' WHERE idpelajar='$idpelajar' ";
$result = mysqli_query($sambungan, $sql);

if ($result == true)
	echo "berjaya kemaskini";
else
	echo "tidak berjaya kemaskini";


?>