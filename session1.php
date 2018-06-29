<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$_SESSION["nama"] = "BUDI";
	echo "Nama Saya ". $_SESSION["nama"] . "<br>";
	?>
</body>
</html>