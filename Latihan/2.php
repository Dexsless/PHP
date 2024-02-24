<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['kelas'])) {
        $kelas = $_POST['kelas'];
        $harga = 0;
        if (in_array("Pemula", $kelas) || in_array("Menengah", $kelas)) {
            $harga = 5000;
        }
        echo "<h1>Kelas yang dipilih:</h1>";
        echo "<ul>";
        foreach ($kelas as $k) {
            echo "<li>" . htmlspecialchars($k) . "</li>";
        }
        echo "</ul>";
        echo "<h1>Harga: Rp " . number_format($harga, 0, ',', '.') . "</h1>";
    } else {
        echo "Tidak ada kelas yang dipilih.";
    }
    ?>
    <div>
        <a href="1.html">Kembali</a>
    </div>
</body>
</html>