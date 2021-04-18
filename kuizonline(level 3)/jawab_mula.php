<?php  
include 'keselamatan.php';
include 'sambungan.php';

$idpelajar = $_SESSION['username'];
if(isset($_POST['idtopik'])) {
	$idtopik = $_POST['idtopik'];
	$sql = "SELECT * FROM kuiz JOIN soalan ON kuiz.idsoalan=soalan.idsoalan WHERE idpelajar = '".$idpelajar."' AND soalan.idtopik = '".$idtopik."'";
	$data = mysqli_query($sambungan,$sql);
	// semak sama ada pelajar sudah jawab atau belum
	if(mysqli_num_rows($data) > 0)
		header("Location: jawab_ulangkaji.php?idtopik=$idtopik");
	else
		header("Location: jawab_soalan.php?idtopik=$idtopik");
}

?>

<link rel="stylesheet" type="text/css" href="borang.css">
<link rel="stylesheet" type="text/css" href="button.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_pelajar.php'; ?>

	<div class="kandungan">
		<h3 class="panjang">SILA PILIH TOPIK</h3>
		<form class="panjang" action="jawab_mula.php" method="post">
			<table>
				<tr>
					<td>Topik</td>
					<td>
						<select class="topik" name="idtopik">
							<?php  
							$sql = "SELECT * FROM topik";
							$data = mysqli_query($sambungan,$sql);
							while($topik=mysqli_fetch_array($data)) {
								echo "<option value='$topik[idtopik]'>$topik[namatopik]</option>";
							}
							?>
						</select>
					</td>
				</tr>
			</table>
			<button class="tambah" type="submit">Mula</button>
		</form>
	</div>

</div>