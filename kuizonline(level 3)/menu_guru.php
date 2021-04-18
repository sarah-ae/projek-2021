<?php  
$nama = $_SESSION['nama'];
?>
<link rel="stylesheet" type="text/css" href="menu.css">
<div class="menu">
	<h3 class="menu">Menu Utama</h3>
	<h2 class="nama"><?php echo $nama; ?></h2>

	<ul>
		<li><a href="home_guru.php" target="kandungan">Home</a></li>
		<li><a class="arrow" href="#">Soalan</a>
			<ul>
				<li><a href="soalan_insert2.php">Tambah</a></li>
				<li><a href="soalan_update2.php">Kemaskini</a></li>
				<li><a href="soalan_delete2.php">Padam</a></li>
				<li><a href="soalan_senarai.php">Senarai</a></li>
				<li><a href="#" class="arrow">Topik</a>
					<ul>
						<li><a href="topik_insert2.php">Tambah</a></li>
						<li><a href="topik_update2.php">Kemaskini</a></li>
						<li><a href="topik_delete2.php">Padam</a></li>
						<li><a href="topik_senarai.php">Senarai</a></li>
					</ul>
				</li>
			</ul>
		</li>

		<li><a href="#" class="arrow">Guru</a>
			<ul>
				<li><a href="guru_insert2.php">Tambah</a></li>
				<li><a href="guru_update2.php">Kemaskini</a></li>
				<li><a href="guru_delete2.php">Padam</a></li>
				<li><a href="guru_jawapan2.php">Padam Jawab</a></li>
				<li><a href="guru_senarai.php">Senarai</a></li>
			</ul>
		</li>

		<li><a href="#" class="arrow">Pelajar</a>
			<ul>
				<li><a href="pelajar_insert2.php">Tambah</a></li>
				<li><a href="pelajar_update2.php">Kemaskini</a></li>
				<li><a href="pelajar_delete2.php">Padam</a></li>
				<li><a href="pelajar_senarai.php">Senarai</a></li>
			</ul>
		</li>

		<li><a href="#" class="arrow">Kelas</a>
			<ul>
				<li><a href="kelas_insert2.php">Tambah</a></li>
				<li><a href="kelas_update2.php">Kemaskini</a></li>
				<li><a href="kelas_delete2.php">Padam</a></li>
				<li><a href="kelas_senarai.php">Senarai</a></li>
			</ul>
		</li>

		<li><a href="laporan_pilihan.php">Laporan</a></li>
		<li><a href="import2.php">Import</a></li>
		<li><a href="logout.php">Keluar</a></li>

	</ul>
</div>