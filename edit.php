<?php

    if(isset($_GET["id"])){
        include_once("koneksi2.php");
        $kode = $_GET["id"];
        $sql = "SELECT * FROM pemesanan WHERE id_pemesanan ='".$id."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }

    if(isset($_POST["txSIMPAN"])){
        $pdata["id1"] = $_POST["txidlama"];
        $pdata["id2"] = $_POST["txid_pemesanana"];
        $pdata["nama_pemesanan"] = $_POST["txnama_pemesanan"];
        $pdata["jenis_kereta"] = $_POST["txjenis_kereta"];
        $pdata["asal"] = $_POST["txasal"];
        $pdata["tujuan"] = $_POST["txtujuan"];
        $pdata["tgl_berangkat"]= $_POST["txtgl_berangkat"];
        $pdata["jam_berangkat"] = $_POST["txjam_berangkat"];
        $pdata["harga"]= $_POST["txharga"];

        include_once("fungsi.php");
        updatedata($pdata);
        header("location:tampildata.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tabel</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="my-2 fw-bold ">Edit Data Tabel pemesanan tiket kereta</h1>
        <form action="edit.php" method="POST">
            <input type="hidden" name="txidlama" value="<?=$h['id_pemesanan'];?>">
           id_pemesanan
            <div>
                 <input type="text" class="form-control form-control" name="txid_pemesanan" value="<?=$h['id_pemesanan'];?>">
            </div>        
            nama_pemesanan
            <div>
                <input type="text" class="form-control form-control" name="txnama_pemesanan" value="<?=$h["nama_pemesanan"];?>">
            </div>
            jenis_kereta
            <div>
                <input type="text" class="form-control form-control" name="txjenis_kereta" value="<?=$h["jenis_kereta"];?>">
            </div>
            asal
            <div>
                <input type="text" class="form-control form-control" name="txasal" value="<?=$h["asal"];?>">
            </div>
            tujuan
            <div>
                <input type="text" class="form-control form-control" name="txtujuan" value="<?=$h["tujuan"];?>">
            </div>
            tgl_berangkat
            <div>
                <input type="text" class="form-control form-control" name="txtgl_berangkat" value="<?=$h["tgl_berangkat"];?>">
            </div>
            jam_berangkat
            <div>
                <input type="text" class="form-control form-control"  name="txjam_berangkat" value="<?=$h["jam_berangkat"];?>">
            </div>
            harga
            <div>
                <input type="text" class="form-control form-control"  name="txharga" value="<?=$h["harga"];?>">
            </div>
            
            <br>
            <button type="submit" class="btn btn-success" name="txSIMPAN">Save</button>  
            <a href="tampildata.php" class="btn btn-danger ms-3">Back</a>
                 
        </form>
    </div>
</body>
</html>