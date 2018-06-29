<?php

unset($_COOKIE['username']);
echo "berhasil di hapus<br>";
unset($_COOKIE['namalengkap']);

if (isset($_COOKIE['username'])) {
	echo "<h1>Cookie 'username' ada isinya : ".$_COOKIE['username'];
} else {
	echo "<h1> Cookie 'username' tidak ada </h1>";
}


if (isset($_COOKIE['namalengkap'])) {
	echo "<h1>Cookie 'namalengkap' ada isinya : ".$_COOKIE['namalengkap'];
} else {
	echo "<h1> Cookie 'namalengkap' tidak ada </h1>";
}

echo "<h2> Klik <a href='cookies1.php'> disini </a> untuk menciptakan cookies</h2>";
echo "<h2> Klik <a href='cookies3.php'> disini </a> untuk penghapusan cookies</h2>";