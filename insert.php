<?php
$_mysqli = new mysqli("localhost","root","root","1731710047" );

if ($_mysqli->connect_error) {
	die('<font color="red">Koneksi Error</font> : <b>'.$_mysqli->connect_error.'</b>');

}

$perintah = $_mysqli->query("INSERT INTO 1731710047_jenis_pakaian(id_jenis_pakaian, jenis_pakaian) VALUES ('6','KAOS')");

echo $_mysqli->query($perintah);
if ($perintah == true) {
	echo "Data berhasil ditambahkan";
}else{
	echo "Gagal".$_mysqli->error;
}

$_mysqli->close();
?>