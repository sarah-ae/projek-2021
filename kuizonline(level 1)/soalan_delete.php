<?php  
include 'sambungan.php';

$idsoalan = $_POST['idsoalan'];

$sql = "DELETE FROM soalan WHERE idsoalan='$idsoalan'";
$result = mysqli_query($sambungan, $sql);

if($result == true)
	echo "Berjaya delete";
else
	echo "tidak berjaya delete";

?>