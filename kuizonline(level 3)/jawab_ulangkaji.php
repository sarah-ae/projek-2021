<?php  
include 'keselamatan.php';
include 'sambungan.php';

$idtopik = $_GET['idtopik'];

?>

<link rel="stylesheet" type="text/css" href="senarai.css">
<link rel="stylesheet" type="text/css" href="button.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_pelajar.php'; ?>

	<div class="kandungan">
		<table>
			<caption>SKEMA DAN KEPUTUSAN</caption>
			<tr>
				<th>Bil</th>
				<th>Soalan</th>
				<th>Keputusan</th>
			</tr>
			<?php  
			$jumlah = 0;
			$betul = 0;
			$idpelajar = $_SESSION['username'];
			$sql = "SELECT * FROM kuiz JOIN soalan ON kuiz.idsoalan = soalan.idsoalan 
					JOIN topik ON soalan.idtopik = topik.idtopik WHERE soalan.idtopik = '".$idtopik."' AND idpelajar = '".$idpelajar."'";
			$data = mysqli_query($sambungan,$sql);
			$bil = 1;
			while($kuiz=mysqli_fetch_array($data)) {
			?>
				<tr>
					<td class="bil"><?php echo $bil; ?></td>
					<td class="soalan">
						<?php  
						$jenis = $kuiz['jenis'];
						if($jenis == 1)
							echo "
								$kuiz[namasoalan]<br>
								<input type=radio name=$kuiz[idsoalan]>A. $kuiz[pilihana]<br>
								<input type=radio name=$kuiz[idsoalan]>B. $kuiz[pilihanb]<br>
								<input type=radio name=$kuiz[idsoalan]>C. $kuiz[pilihanc]<br>
							";
						else if($jenis == 2)
							echo "
								$kuiz[namasoalan]<br>
								<input type=radio name=$kuiz[idsoalan]>Benar<br>
								<input type=radio name=$kuiz[idsoalan]>Salah<br>
							";
						else if($jenis == 3)
							echo "
								$kuiz[namasoalan]<br>
								<input type=text name=$kuiz[idsoalan]><br>
							";
						?>
					</td>
					<td class="skema">
						<?php  
						echo "Jawapannya : ".$kuiz['jawapan']."<br>";
						echo "Anda pilih : ".$kuiz['pilih']."<br>";
						if(strtolower($kuiz['pilih']) == strtolower($kuiz['jawapan'])) {
							echo "<img src='betul.png'>";
							$betul = $betul + 1;
						}
						else
							echo "<img src='delete.png'>";
						?>
					</td>
				</tr>
				<?php  
				$idsoalan[$bil-1] = $kuiz['idsoalan'];
				$bil = $bil + 1;
				$jumlah = $jumlah + 1;
				$topik = $kuiz['namatopik'];
			}
				?>
		</table>
		<?php  
		$peratus = $betul / $jumlah * 100;
		$salah = $jumlah - $betul;

		for($i=0; $i<count($idsoalan); $i++) {
			$sql = "UPDATE kuiz SET peratus = $peratus WHERE idsoalan='".$idsoalan[$i]."' AND idpelajar='".$idpelajar."'";
			$data = mysqli_query($sambungan,$sql);
		}
		?>

		<table>
			<caption>KEPUTUSAN PRESTASI INDIVIDU</caption>
			<tr>
				<th class="keputusan">Topik</th>
				<th class="keputusan"><?php echo $topik; ?></th>
			</tr>
			<tr>
				<td class="keputusan">Bilangan yang betul</td>
				<td class="keputusan"><?php echo $betul; ?></td>
			</tr>
			<tr>
				<td class="keputusan">Bilangan yang salah</td>
				<td class="keputusan"><?php echo $salah; ?></td>
			</tr>
			<tr>
				<td class="keputusan">Jumlah Soalan</td>
				<td class="keputusan"><?php echo $jumlah; ?></td>
			</tr>
			<tr>
				<td class="keputusan">Keputusan</td>
				<td class="keputusan"><?php echo number_format($peratus,0); ?> % </td>
			</tr>
		</table>
	</div>

</div>