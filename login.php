<?php
	if (isset($_POST["kirim"])) {

	session_start();
	$_SESSION["username"] = $_POST['username'];
	$_SESSION["password"] = $_POST['password'];
	$nama = $_SESSION["username"] ; 
	echo "<table border='2'>";
	echo "<tr><td colspan='3'>Anda telah melakukan login</td></tr>";
	echo "<tr><td>nama</td><td> : </td><td>  $nama  </td></tr>";
	echo "<tr><td>Profesi</td><td> : </td><td> Mahasiswa </td></tr>";
	echo "<tr><td colspan='3'><a href='logout.php'>Logout</a></td></tr>";
	echo "<tr><td colspan='3'><p>Apabila anda telah melakukan login anda dapat mengklik <a href='ceksession.php'>LINK</a> ini untuk mengecek session</p></td></tr>";
	echo "<tr><td colspan='3'>Apabila anda telah logout , anda tidak dapat mengecek session</td></tr>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<p>Username : <input type="text" name="username"></p>
		<p>Password : <input type="password" name="password"></p>
		<input type="submit" name="kirim" value="Login">
	</form>
</body>
</body>
</html>