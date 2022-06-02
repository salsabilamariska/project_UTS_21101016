<?php
    include_once("koneksi2.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM pemesanan WHERE id_pemesanan = '".$_GET["id"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: tampildata.php");