<?php
$_mysqli = new mysqli("localhost","root","root","1731710047" );

if ($_mysqli->connect_error) {
	die('<font color="red">Koneksi Error</font> : <b>'.$_mysqli->connect_error.'</b>');

}


$perintah = $_mysqli->query('SELECT * fROM 1731710047_jenis_pakaian WHERE id_jenis_pakaian="6"');
$hasil = $perintah->fetch_assoc();
echo "Data Awal <br/>";
echo "id_jenis_pakaian ".$hasil["id_jenis_pakaian"]."<br/>";
echo "jenis_pakaian :".$hasil["jenis_pakaian"]."<br/>";

$perintah = $_mysqli->query('UPDATE 1731710047_jenis_pakaian SET jenis_pakaian="Kaos" WHERE id_jenis_pakaian="6"');

echo $_mysqli->query($perintah);
if ($perintah == TRUE) {
	echo "Data berhasil diubah";
}else {
	echo "Gagal".$_mysqli->error;
}

$perintah = $_mysqli->query("SELECT * FROM 1731710047_jenis_pakaian WHERE id_jenis_pakaian='6'");
$hasil = $perintah->fetch_assoc();
echo "Setelah Di ubah <br>";
echo "id_jenis_pakaian :".$hasil["id_jenis_pakaian"]."<br>";
echo "jenis_pakaian : ".$hasil["jenis_pakaian"]."<br>";
$_mysqli->close();
?>