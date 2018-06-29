<?php
$_mysqli = new mysqli("localhost","root","root","1731710047" );

if ($_mysqli->connect_error) {
	die('<font color="red">Koneksi Error</font> : <b>'.$_mysqli->connect_error.'</b>');
//jancok
}
$perintah = $_mysqli->query("DELETE FROM 1731710047_jenis_pakaian WHERE id_jenis_pakaian='6'");

echo $_mysqli->query($perintah);

if ($perintah == true) {
	echo "Data berhasil dihapus";
}else {
	echo '<font color="red">gagal</font> : <b>'.$_mysqli->connect_error.'</b>';
}

$_mysqli->close();
?>
