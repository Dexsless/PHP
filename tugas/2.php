<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
<div align = "center" style="margin-top: 12rem;">
<h3>
</body>
</html>
<?php
$nama = @$_REQUEST['nama'];
$tanggal = @$_REQUEST['tanggal'];

if ($tanggal >= 1944 && $tanggal <= 1965) {
    $generasi = "Baby boomer";
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi";
} elseif ($tanggal >= 1965 && $tanggal <= 1980) {
    $generasi = "Generasi X";
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi";
} elseif ($tanggal >= 1980 && $tanggal <= 1995) {
    $generasi = "Generasi Y(Millenials)";
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi";
} elseif ($tanggal >= 1995 && $tanggal <= 2016) {
    $generasi = "Generasi Z";
    echo "$nama, berdasarkan tahun lahir anda tergolong $generasi";
} else {
    echo "$nama, berdasarkan tahun lahir anda tidak tergolong generasi apapun";
}

echo "</h3></div>";

?>