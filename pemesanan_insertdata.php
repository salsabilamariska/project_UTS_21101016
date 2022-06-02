<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["id_pemesanan"] = $_POST["txid_pemesanan"];
    $pdata["nama_pemesanan"] = $_POST["txnama_pemesanan"];
    $pdata["jenis_kereta"] = $_POST["txjenis_kereta"];
    $pdata["asal"] = $_POST["txasal"];
    $pdata["tujuan"] = $_POST["txtujuan"];
    $pdata["tgl_berangkat"] = $_POST["txtgl_berangkat"];
    $pdata["jam_berangkat"] = $_POST["txjam_berangkat"];
    $pdata["harga"] = $_POST["txharga"];

    include_once("fungsi.php");
    insertdata($pdata);
    header("location:tampildata.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="fw-bold my-4">Tabel Pemesanan </h1>
        <form action="" method="POST">
          id_pemesanan
            <div>
                <input type="text" name="txid_pemesanan" class="form-control form-control">
            </div>
            nama_pemesanan
            <div>
                <input type="text" name="txnama_pemesanan" class="form-control form-control">
            </div>
            jenis_kereta
            <div>
                <input type="text" name="txjenis_kereta" class="form-control form-control">
            </div>
            asal
            <div>
                <input type="text" name="txasal" class="form-control form-control">
            </div>
            txtujuan
            <div>
                <input type="text" name="txtujuan" class="form-control form-control">
            </div>
            tgl_berangkat
            <div>
                <input type="date" name="txtgl_berangkat" class="form-control form-control">
            </div>
            jam_berangkat
            <div>
                <input type="datetime" name="txjam_berangkat" class="form-control form-control">
            </div>
            harga
            <div>
            <input type="text" name="txharga" class="form-control form-control">
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="insert btn btn-primary" name="txSIMPAN">TAMBAH</button>
            </div>
        </form>
    </div>
</body>
</html>