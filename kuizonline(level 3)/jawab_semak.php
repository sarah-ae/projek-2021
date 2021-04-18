<?php  
include 'sambungan.php';
session_start();

$idpelajar = $_SESSION['username'];
$idtopik = $_POST['idtopik'];
date_default_timezone_set("Asia/Kuala_Lumpur");
$tarikh = date('d/m/Y');
$sql = "SELECT * FROM soalan WHERE idtopik = '".$idtopik."' ORDER BY idsoalan ASC";
$data = mysqli_query($sambungan,$sql);
while($soalan=mysqli_fetch_array($data)) {
	$idsoalan = $soalan['idsoalan'];
	$jawapanpelajar = $_POST["$idsoalan"];
	$sql = "INSERT INTO kuiz VALUES('$idpelajar','$idsoalan','$tarikh','$jawapanpelajar',0)";
	$datakuiz = mysqli_query($sambungan,$sql);

}
header("Location: jawab_ulangkaji.php?idtopik=$idtopik");

?>