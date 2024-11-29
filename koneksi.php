<?php
    //koneksi ke my sql
    $cnn=mysqli_connect('localhost','root','');
        if (!$cnn){
            echo "koneksi gagal";
        } else {
            echo"koneksi Berhasil";
        }
?>
