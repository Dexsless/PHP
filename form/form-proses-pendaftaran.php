<?php 
$nama = @$_REQUEST['nama'];
$email = @$_REQUEST['email'];
$usia = @$_REQUEST['usia'];
$tanggal = @$_REQUEST['tanggal_lahir'];
$alamat = @$_REQUEST['alamat'];
$jenis = @$_REQUEST['jenis_kelamin'];
$status = @$_REQUEST['status'];
$hobi = @$_REQUEST['hobi'];

echo "Nama : $nama<br>";
echo "Email : $email<br>";
echo "Usia : $usia<br>";
echo "Tanggal Lahir : $tanggal<br>";
echo "Alamat : $alamat<br>";
echo "Jenis Kelamin : $jenis<br>";
echo "Status : $status<br>";
echo "Hobi : $hobi<br>";

?>