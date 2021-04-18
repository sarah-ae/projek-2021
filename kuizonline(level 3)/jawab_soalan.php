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
		<form action="jawab_semak.php" method="post">
			<table>
				<caption>SOALAN KUIZ ONLINE</caption>
				<tr>
					<th>Bil</th>
					<th>Soalan</th>
				</tr>
				<?php  
				$sql = "SELECT * FROM soalan WHERE idtopik='$idtopik' ORDER BY idsoalan ASC";
				$data = mysqli_query($sambungan,$sql);
				$bil = 1;
				while($soalan = mysqli_fetch_array($data)) {
				?>
				<tr>
					<td class="bil"><?php echo $bil; ?></td>
					<td class="soalan">
						<?php  
						$jenis = $soalan['jenis'];
						if($jenis == 1)
							echo "
								$soalan[namasoalan]<br>
								<input type=radio name=$soalan[idsoalan] value=A>A. $soalan[pilihana]<br>
								<input type=radio name=$soalan[idsoalan] value=B>B. $soalan[pilihanb]<br>
								<input type=radio name=$soalan[idsoalan] value=C>C. $soalan[pilihanc]<br>
								<input type=hidden name=idtopik value=$idtopik>
							";
						else if($jenis == 2)
							echo "
								$soalan[namasoalan]<br>
								<input type=radio name=$soalan[idsoalan] value=benar>Betul<br>
								<input type=radio name=$soalan[idsoalan] value=salah>Salah<br>
								<input type=hidden name=idtopik value=$idtopik>
							";
						else if($jenis == 3)
							echo "
								$soalan[namasoalan]<br>
								<input type=text name=$soalan[idsoalan]><br>
								<input type=hidden name=idtopik value=$idtopik>
							";
						?>
					</td>
				</tr>
				<?php $bil = $bil + 1; } ?>
			</table>
			<button class="semak" type="submit">Semak</button>
		</form>
	</div>

</div>