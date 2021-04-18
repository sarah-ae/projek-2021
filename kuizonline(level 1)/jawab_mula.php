<?php 
include 'sambungan.php';

session_start();
$idpelajar = $_SESSION['username'];

$sql = "SELECT * FROM kuiz WHERE idpelajar = '".$idpelajar."'";
$data = mysqli_query($sambungan,$sql);
// semak sama da pelajar dah jawab atau belum
if(mysqli_num_rows($data) > 0)
	header("Location: jawab_ulangkaji.php");
else
	header("Location: jawab_soalan.php")

?>