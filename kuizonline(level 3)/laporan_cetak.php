<?php  
include 'keselamatan.php';
include 'sambungan.php';

?>

<link rel="stylesheet" type="text/css" href="senarai.css">
<link rel="stylesheet" type="text/css" href="button.css">

<div class="all">

	<!-- SIMPAN SINI -->
	<?php include 'header.php'; ?>
	<?php include 'menu_guru.php'; ?>

	<div class="kandungan">
		<table>
			<tr>
				<th>Bil</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Tarikh</th>
				<th>Topik</th>
				<th>Peratus</th>
			</tr>
			<?php  
			$pilihan = $_POST['pilihan'];
			$idkelas = $_POST['idkelas'];
			$peratus = $_POST['peratus'];
			$sql = "SELECT * FROM kuiz
					JOIN pelajar ON kuiz.idpelajar = pelajar.idpelajar
					JOIN kelas ON pelajar.idkelas = kelas.idkelas 
					JOIN soalan ON kuiz.idsoalan = soalan.idsoalan
					JOIN topik ON soalan.idtopik = topik.idtopik
					GROUP BY pelajar.idpelajar, topik.idtopik ";

			switch($pilihan) {
				case 1 : $syarat = "";
							$tajuk = "PENCAPAIAN KESELURUHAN"; 
							break;
				case 2 : $syarat = "HAVING kelas.idkelas = '$idkelas' ";
							$tajuk = "PENCAPAIAN MENGIKUT KELAS";
							break;
				case 3 : 
						 if($peratus == 80) {
						 	$syarat = "HAVING peratus >= 80";
						 	$tajuk = "PENCAPAIAN LEBIH DARI 80%";
						 } else if($peratus == 50) {
						 	$syarat = "HAVING peratus >= 50";
						 	$tajuk = "PENCAPAIAN LEBIH DARI 50";
						 } else if($peratus == 0) {
						 	$syarat = "HAVING peratus < 50";
						 	$tajuk = 'PENCAPAIAN KURANG DARI 50%';
						 }
						 break;
				case 4 : 
						 if($peratus == 80) {
						 	$syarat = "HAVING peratus >= 80 AND kelas.idkelas = '".$idkelas."'";
						 	$tajuk = "PENCAPAIAN MENGIKUT KELAS DAN LEBIH DARI 80%";
						 } else if($peratus == 50) {
						 	$syarat = "HAVING peratus >= 50 AND kelas.idkelas = '".$idkelas."'";
						 	$tajuk = "PENCAPAIAN MENGIKUT KELAS DAN LEBIH DARI 50";
						 } else if($peratus == 0) {
						 	$syarat = "HAVING peratus < 50 AND kelas.idkelas = '".$idkelas."'";
						 	$tajuk = 'PENCAPAIAN MENGIKUT KELAS DAN KURANG DARI 50%';
						 }
						 break;
			}

			$bil = 1;
			$sql = $sql.$syarat;

			$data = mysqli_query($sambungan,$sql);
			while($kuiz=mysqli_fetch_array($data)) {
			?>

			<tr>
				<td><?php echo $bil; ?></td>
				<td><?php echo $kuiz['namapelajar']; ?></td>
				<td><?php echo $kuiz['namakelas']; ?></td>
				<td><?php echo $kuiz['tarikh']; ?></td>
				<td><?php echo $kuiz['namatopik']; ?></td>
				<td><?php echo $kuiz['peratus']; ?></td>
			</tr>

			<?php  
				$bil = $bil + 1;
			}
			?>

			<caption><?php echo $tajuk; ?></caption>

		</table>
		<button class="cetak" onclick="window.print()">Cetak</button>
	</div>

</div>