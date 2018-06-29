<?php
    session_start();
    if(!isset($_SESSION["nama"])){
        header("Location:login.php");
    }
    include "connection.php";

    if(isset($_GET['id'])){
        if(empty($_GET['id'])){
            echo "<b>Data yang dihapus tidak ada</b>";
        }
        else{
            $delete = mysqli_query($mysqli,"DELETE FROM stok WHERE id='$_GET['id']'") or die("Mysql Error :".mysqli_error($mysqli));
            if($delete){
                echo "Berhasil Hapus Data <br>";
                echo "<a href='tampil.php'>Kembali </a>"
            }
        }
    }
?>