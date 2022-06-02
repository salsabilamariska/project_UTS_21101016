<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE pemesanan(
    id_pemesanan varchar(10) PRIMARY KEY, 
    nama_pemesanan varchar(30),
    jenis_kereta varchar(20),
    asal varchar(20),
    tujuan varchar(15),
    tgl_berangkat date,
    jam_berangkat datetime,
    harga int(20)
);";

$hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Tabel pemesanan <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel pemesanan <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($cnn);