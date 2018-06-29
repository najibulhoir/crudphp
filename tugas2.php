<?php
$_mysqli = new mysqli("localhost","root","root","1731710047");
$hasil = $_mysqli->query("SELECT * FROM 1731710047_jenis_pakaian");
$baris = $hasil->fetch_assoc();
var_dump($baris);
?>