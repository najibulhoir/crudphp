<?php
	session_start();
	include "connection.php"; //Memangil file koneksi.php untuk menghubungkan ke databases

	if(isset($_GET['simpan'])){
		$id = $_GET['id']; // memanggil nama variabel id untuk di buat menjadi variabel $id
		$nama_baju =$_GET['baju'];

		//menambahkan query sql tambah data untuk memasukan data ke databases

		$data = mysql_query($mysql, "INSERT INTO stok SET id='$id', baju='$nama_baju'") or die ("data salah : ".mysql_error($mysql));

		//untuk mengetahui apakah data berhasil di simpan atau belum
		if($data){
			echo "DATA BERHASIL DI INPUT";
			echo "<table width='370' border='1'cellpadding='10'><thead>
			<tr><td width='370'>ID baju</td><td width='1333'>Nama</td>
			</tr><thead><tbody>";

			$stok = mysql_query($mysql, "SELECT * FROM stok");// memberi perintah query sql untuk menampilkan stok

			//Perintah untuk menampilkan semua stok
			while ($show = mysql_fetch_array($stok)) {
				echo "<tr><td>";
				echo $show['id'];
				echo "</tr><td>";
				echo $show['baju'];
				echo "</tr></td>";
			}
			echo "</tbody></table>";
			echo "<br><a harf='tampilan.php'>Kembali</a>"; // berfungsi untuk mengeklik ke halaman tampilan.php
		}else{
			echo "Gagal Input Data!!!";
		}
	}
?>
