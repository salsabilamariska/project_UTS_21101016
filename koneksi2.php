<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASSCODE","");
    define("DBNAME","pemesanantiket_ketera");
    define("DBPORT","3306");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASSCODE, DBNAME, DBPORT) or die("Koneksi ke DBMS MySQL GAGAL<br>");
