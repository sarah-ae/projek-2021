<?php
$nama = $_SESSION['nama'];

?>

<link rel="stylesheet" href="menu.css">
<div class="menu">
	<h3 class="menu">Main Menu</h3>
	<h2 class="nama"><?php echo $nama; ?></h2>
	<div class="menu-area">
		<ul>
			<li><a href="home_pelajar.php">Home</a></li>
			<li><a href="jawab_mula.php">Soalan</a></li>
			<li><a href="logout.php">Keluar</a></li>
		</ul>
	</div>
</div>