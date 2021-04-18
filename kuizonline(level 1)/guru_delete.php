<?php  
include 'sambungan.php';

$idguru = $_POST['idguru'];

$sql = "DELETE FROM guru WHERE idguru='$idguru'";
$result = mysqli_query($sambungan, $sql);

if($result == true)
	echo "Berjaya delete";
else
	echo "tidak berjaya delete";

?>