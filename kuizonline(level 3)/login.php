<?php  
include 'sambungan.php';
session_start();

if(isset($_POST['userid'])) {
	$userid = $_POST['userid'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM pelajar";
	$result = mysqli_query($sambungan,$sql);
	$jumpa = false;
	while($pelajar=mysqli_fetch_array($result)) {
		if($pelajar['idpelajar'] == $userid && $pelajar['password'] == $password) {
			$jumpa = true;
			$_SESSION['username'] = $pelajar['idpelajar'];
			$_SESSION['nama'] = $pelajar['namapelajar'];
			$_SESSION['status'] = 'pelajar';
			break;
		}
	}

	if($jumpa == false) {
		$sql = "SELECT * FROM guru";
		$result = mysqli_query($sambungan,$sql);
		while($guru=mysqli_fetch_array($result)) {
			if($guru['idguru'] == $userid && $guru['password'] == $password) {
				$jumpa = true;
				$_SESSION['username'] = $guru['idguru'];
				$_SESSION['nama'] = $guru['namaguru'];
				$_SESSION['status'] = 'guru';
			}
		}
	}

	if($jumpa == true) {
		if($_SESSION['status'] == 'pelajar')
			header("Location: home_pelajar.php");
		else
			header("Location: home_guru.php");
	}
	else
		echo "<script>
				alert('Kesalahan pada username atau password');
				window.location='login.php'
			  </script>";

}

?>

<link rel="stylesheet" type="text/css" href="borang.css">
<link rel="stylesheet" type="text/css" href="button.css">
<body background="wood.jpg">
	<center>
		<img src="tajuk.png"><br><img src="tajuk2.png">
	</center>
	<h3 class="pendek">SIGN IN</h3>
	<form class="pendek login" action="login.php" method="post">
		<table>
			<tr>
				<td><img src="user.png"></td>
				<td><input type="text" name="userid" placeholder="idpengguna"></td>
			</tr>
			<tr>
				<td><img src="lock.png"></td>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
		</table>
		<button class="login" type="submit">Login</button>
		<button class="signup" type="button" onclick="window.location='signup.php'">Sign Up</button>
	</form>
</body>