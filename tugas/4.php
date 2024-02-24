<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h1 style="margin-top: 5rem;">Struk Registrasi</h1>
</body>
</html>
<?php
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $biaya = $_POST['biaya'];
    $jurusan = $_POST['jurusan'];

    if ($jurusan == "RPL") {
        $biayajurusan = 2500000;
    } else if ($jurusan == "TKRO") {
        $biayajurusan = 3000000;
    } else if ($jurusan == "TBSM") {
        $biayajurusan = 3500000;
    }

    $total = $biaya + $biayajurusan;

    echo "Nama : $nama<br>";
    echo "Tanggal : $tanggal<br>";
    echo "Jenis : $jenis<br>";
    echo "Biaya Registrasi : $biaya<br>";
    echo "Jurusan : $jurusan<br>";
    echo "Biaya Jurusan : $biayajurusan<br>";
    echo "Total Pembayaran : $total<br>";
    echo "</center>";
?>