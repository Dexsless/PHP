<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
<!-- <form action="4.php" method="post"> -->
    <center>
<form method="post">
    <h1 style="margin-top: 5rem;">Daftar SMK</h1>
    <table border="1" style="margin-top: 5rem;">
        <tr>
            <td>
            <label>Nama :</label>
            </td>
            <td>
            <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>
            <label>Tanggal Lahir :</label>
            </td>
            <td>
            <input type="Date" name="tanggal">
            </td>
        </tr>
        <tr>
            <td>
            <label>Jenis Kelamin</label>
            </td>
            <td>
            <input type="radio" name="jenis" value="Laki Laki"> Laki Laki 
            <input type="radio" name="jenis" value="Perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td>
            <label>Biaya Register</label>
            </td>
            <td>
            <input type="number" name="biaya" value="100000"> 
            </td>
        </tr>
        <tr>
            <td>
            <label>Jurusan</label>
            </td>
            <td>
            <select name="jurusan">
            <option value="RPL">RPL</option>
            <option value="TKRO">TKRO</option>
            <option value="TBSM">TBSM</option>
        </select>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" name="submit">Kirim</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php

    if (isset($_POST['submit'])) {
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
    echo "<h1>Struk Registrasi</h1>";
    echo "Nama : $nama<br>";
    echo "Tanggal : $tanggal<br>";
    echo "Jenis : $jenis<br>";
    echo "Biaya Registrasi : $biaya<br>";
    echo "Jurusan : $jurusan<br>";
    echo "Biaya Jurusan : $biayajurusan<br>";
    echo "Total Pembayaran : $total<br>";
    echo "</center>";
}
?>