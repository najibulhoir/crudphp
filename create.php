<?php
 
  include "config.php";
    if (isset($_GET['simpan'])) {
      $id = "13123";
      $nama_baju = "12344s";
      $data = mysqli_query($db, "insert into 1731710047_detail_pakaian set id_pakaian='$id', nama_pakaian=$'$nama_baju'") or die ("data salah : ".mysqli_error($mysqli));

      if ($data) {
        echo "Data Berhasil Diinput";
        echo "<table width='370' border='1' cellpadding='10'>
          <thead><tr><td width='50'>ID Baju</td><td width='133'>Nama</td>
          </tr></thead></table>";

        $stok=mysqli_query($mysqli,'select * from 1731710047_detail_pakaian');
        while ($show = mysqli_fetch_array($stok)) {
          echo "<tr><td>";
          echo "$show['id_pakaian']";
          echo "</td><td>";
          echo "$show['nama_pakaian']";
          echo "</td></tr>";
        }
        echo "</tbody></table>";
        echo "<br><a href='read.php'>Kembali</a>";
      }else {
        echo "gagal input detail";
        echo "<br> <a href=read.php>Kembali</a>";
      }
    }
 ?>
