<?php
  session_start();
  if (!iseet($_SESSION['nama'])) {
    header("Location: login.php");
  }
  include "connection.php";
    if (isset($_GET['simpan'])) {
      $id = $_GET['id'];
      $nama_baju = $_GET['baju'];
      $data = mysqli_query($mysqli, "insert into stok set id='$id', baju=$'$nama_baju'") or die ("data salah : ".mysqli_error($mysqli));

      if ($data) {
        echo "Data Berhasil Diinput";
        echo "<table width='370' border='1' cellpadding='10'>
          <thead><tr><td width='50'>ID Baju</td><td width='133'>Nama</td>
          </tr></thead></table>";

        $stok=mysqli_query($mysqli,'select * from stok');
        while ($show = mysqli_fetch_array($stok)) {
          echo "<tr><td>";
          echo "$show['id']";
          echo "</td><td>";
          echo "$show['baju']";
          echo "</td></tr>";
        }
        echo "</tbody></table>";
        echo "<br><a href='tampil.php'>Kembali</a>";
      }else {
        echo "gagal input detail";
        echo "<br> <a href=tampil.php>Kembali</a>";
      }
    }
 ?>
