<?php 
$nama = @$_REQUEST['nama'];
$jenis = @$_REQUEST['jenis'];
$tanggal = @$_REQUEST['tanggal'];
$kategori = @$_REQUEST['kategori'];
$kelas = @$_REQUEST['kelas'];
$kemampuan = @$_REQUEST['kemampuan'];
$metode = @$_REQUEST['metode'];
$diskon = 0;

if ($kategori == "Sepak Bola") {
    if ($kelas == "Pemula") {
        $harga = 200000;
    }
    else if ($kelas == "Menengah") {
        $harga = 250000;
    }
    else if ($kelas == "Lanjutan") {
        $harga = 300000;
    }
}
else if ($kategori == "Bulu Tangkis") {
    if ($kelas == "Pemula") {
        $harga = 150000;
        if ($jenis == "Wanita") {
            $diskon = $harga * 0.1;
        }
    }
    else if ($kelas == "Menengah") {
        $harga = 200000;
        if ($jenis == "Wanita") {
            $diskon = $harga * 0.1;
        }
    }
    else if ($kelas == "Lanjutan") {
        $harga = 250000;
        if ($jenis == "Wanita") {
            $diskon = $harga * 0.1;
        }
    }
}
else if ($kategori == "Renang") {
    if ($kelas == "Pemula") {
        $harga = 180000;
    }
    else if ($kelas == "Menengah") {
        $harga = 220000;
    }
    else if ($kelas == "Lanjutan") {
        $harga = 270000;
    }
}

$total = $harga - $diskon;

if ($total > 500000) {
    $keputusan = "Selamat Anda Mendapatkan Merchandise Gratisssss!!!!";
} else {
    $keputusan = "Sayang Sekali Total Harga anda kurang dari Rp 500.000, Anda gagal Mendapatkan Merchandise Gratis";
}
echo "<center>";
echo "<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "Jenis Kelamin : $jenis<br>";
echo "Tanggal Lahir : $tanggal<br>";
echo "Kategori : $kategori<br>";
echo "Kelas : $kelas<br>";
echo "Kemampuan Fisik : $kemampuan<br>";
echo "Metode Pembayaran : $metode<br>";
echo "Harga : Rp. $harga<br>";
echo "Diskon : Rp. $diskon<br>";
echo "Total Harga : Rp. $total<br>";
echo $keputusan;
echo "</center>";


?>