<?php

class bangunDatar{
    public function persegi(){
    echo "<h3>Menghitung Luas Persegi</h3>";
    $sisi = 5;
    echo "Sisi : $sisi<br>";
    echo "Luasnya : ". $sisi * $sisi;
} public function persegiPanjang(){
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    $panjang = 5;
    $lebar = 4;
    echo "Panjang : $panjang<br>";
    echo "Lebar : $lebar<br>";
    echo "Luasnya : ". $panjang * $lebar;
} public function segitiga(){
    echo "<h3>Menghitung Luas Segitiga</h3>";
    $alas = 10;
    $tinggi = 5;
    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    echo "Luasnya : ". $alas * $tinggi * 0.5;
} public function lingkaran(){
    echo "<h3>Menghitung Luas Lingkaran</h3>";
    $jariJari = 5;
    echo "Jari Jari : $jariJari<br>";
    echo "Luasnya : ". $jariJari * $jariJari * 3.14;
}
}

$bangunDatar = new bangunDatar();

echo $bangunDatar->persegi();
echo "<hr>";
echo $bangunDatar->persegiPanjang();
echo "<hr>";
echo $bangunDatar->segitiga();
echo "<hr>";
echo $bangunDatar->lingkaran();

?>