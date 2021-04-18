<?php  
include 'sambungan.php';
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

?>
<link rel="stylesheet" type="text/css" href="senarai.css">

<table>
	<caption>SKEMA DAN KEPUTUSAN</caption>
	<tr>
		<th>Bil</th>
		<th>Soalan</th>
		<th>Skema</th>
	</tr>
	<?php  
	$jumlah = 0;
	$betul = 0;
	$idpelajar = $_SESSION['username'];
	$sql = "SELECT * FROM kuiz JOIN soalan ON kuiz.idsoalan = soalan.idsoalan WHERE idpelajar = '".$idpelajar."'";
	$data = mysqli_query($sambungan,$sql);
	$bil = 1;
	while($kuiz=mysqli_fetch_array($data)) {
	?>
	<tr>
		<td class="bil"><?php echo $bil; ?></td>
		<td class="soalan">
			<?php  
			echo $kuiz['namasoalan']."<br>";
			echo "A.".$kuiz['pilihana']."<br>";
			echo "B.".$kuiz['pilihanb']."<br>";
			echo "C.".$kuiz['pilihanc']."<br>";
			?>
		</td>
		<td class="skema">
			<?php  
			echo "Jawapannya : ".$kuiz['jawapan']."<br>";
			echo "Anda pilih ".$kuiz['pilih']."<br>";
			if($kuiz['pilih'] == $kuiz['jawapan']) {
				echo "<img src='betul.png'>";
				$betul = $betul + 1;
			}
			else
				echo "<img src='delete.png'> ";
			?>
		</td>
	</tr>
	<?php 
		$bil = $bil + 1;
		$jumlah = $jumlah + 1;
	}
	?>
</table>
<?php  
	$peratus = $betul / $jumlah * 100;
	$salaha = $jumlah - $betul;

	$sql = "UPDATE kuiz SET peratus = $peratus WHERE idpelajar = '".$idpelajar."'";
	$data = mysqli_query($sambungan,$sql);

?>

<table>
	<caption>KEPUTUSAN PRESTASI INDIVIDU</caption>
	<tr>
		<th class="keputusan">Perkara</th>
		<th class="keputusan">Bilangan</th>
	</tr>
	<tr>
		<td class="keputusan">Bilangan yang betul</td>
		<td class="keputusan"><?php echo $betul; ?></td>
	</tr>
	<tr>
		<td class="keputusan">Jumlah soalan</td>
		<td class="keputusan"><?php echo $jumlah; ?></td>
	</tr>
	<tr>
		<td class="keputusan">Keputusan</td>
		<td class="keputusan"><?php echo number_format($peratus,0); ?> % </td>
	</tr>
</table>