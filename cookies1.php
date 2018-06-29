<?php
	$val = 'Polinema';
	$val2 = 'Politeknik Negeri Malang';

	setcookie("username",$val);
	setcookie("namalengkap",$val2,time()+3600);

	echo "<h1>ini pengenalan cookie</h1>";
	echo "<h2>Klik <a href='cookies2.php'> disini </a> unutk memeriksa cookies";
?>