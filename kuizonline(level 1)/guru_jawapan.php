<?php  
include 'sambungan.php';

session_start();

$idpelajar = $_POST['idpelajar'];

$sql = "DELETE FROM kuiz WHERE idpelajar='$idpelajar' ";
$result = mysqli_query($sambungan, $sql);

if($result == true)
	echo "Berjaya padam rekod";
else
	echo "tidak berjaya padam";

?>