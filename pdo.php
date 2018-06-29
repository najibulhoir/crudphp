<?php
	$pdo = new PDO('mysql:host=localhost;dbname=1731710047','root','root');
	$perintah = $pdo->query("SELECT * FROM 1731710047_jenis_pakaian");
	$baris = $perintah->fetch(PDO::FETCH_ASSOC);
	var_dump($baris);
?>