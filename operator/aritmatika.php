<?php
$gaji = 1000000;
$pajak = 0.025;

$thp = $gaji - ($gaji * $pajak);
echo "Gaji Sebelum dipotong pajak : <b>$gaji</b><br>";
echo "Gaji Bersih : <b>$thp</b><br>";
?>