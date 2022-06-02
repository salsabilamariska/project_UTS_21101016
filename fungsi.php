<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO pemesanan (id_pemesanan, nama_pemesanan, jenis_kereta, asal, tujuan, tgl_berangkat, jam_berangkat, harga) 
    VALUES('".$pdata["id_pemesanan"]."', '".$pdata["nama_pemesanan"]."', '".$pdata["jenis_kereta"]."', '".$pdata["asal"]."', '".$pdata["tujuan"]."', '".$pdata["tgl_berangkat"]."', '".$pdata["jam_berangkat"]."', '".$pdata["harga"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE pemesanan SET
        id_pemesanan = '".$pdata["id_pemesanan"]."',
        nama_pemesanan = '".$pdata["nama_pemesanan"]."',
        jenis_kereta = '".$pdata["jenis_kereta"]."',
        asal = '".$pdata["asal"]."',
        tujuan = '".$pdata["tujuan"]."',
        tgl_berangkat = '".$pdata["tgl_berangkat"]."',
         jam_berangkat = '".$pdata["jam_berangkat"]."',
        harga = '".$pdata["harga"]."'
        WHERE id_pemesanan = '".$pdata["id1"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sql);
    return $hsl;
}

function tampildata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM pemesanan;";
    $hsl = mysqli_query($cnn,$sql);
    $hsl1 = "";
    $i = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$i.'</td>
        <td class="text-center">'.$h["id_pemesana"].'</td>
        <td class="text-center">'.$h["nama_pemesana"].'</td>
        <td class="text-center">'.$h["jenis_kereta"].'</td>
        <td class="text-center">'.$h["asal"].'</td>
        <td class="text-center">'.$h["tujuan"].'</td>
        <td class="text-center">'.$h["tgl_berangkat"].'</td>
        <td class="text-center">'.$h["jam_berangkat"].'</td>
        <td class="text-center">'.$h["harga"].'</td>
        <td class = "text-center">
            <a class="btn btn-primary px-3 fw-bold" href="edit.php?kode='.$h["id_pemesanan"].'">Edit</a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger px-3 fw-bold" href="delete.php?kode='.$h["id_pemesanan"].'" onClick=\'return confirm("Hapus Data?");\'>Delete</a>
        </td>
    </tr>';
    $i++;
    }
    return $hsl1;
}