<?php  
include 'sambungan.php';

$idpelajar = $_POST['idpelajar'];

$sql = "DELETE FROM pelajar WHERE idpelajar='$idpelajar' ";
$result = mysqli_query($sambungan, $sql);

if ($result == true)
	echo "berjaya padam";
else
	echo "tidak berjaya padam";


?>