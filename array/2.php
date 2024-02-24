<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <center>
    <h1>Data Nilai Ujian Kelas XII RPL</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td>
            <label>Jumlah Siswa</label>
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" name="jumlah">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
            <td>
                <input type="submit" name="kirim" value="kirim">
            </td>
        </tr>
    </table>
    <br><br>
    </form>
</body>
</html>
<?php
if (isset($_POST['kirim'])) {
    $jumlah = $_POST['jumlah'];

    for ($ulang = 1; $ulang <= $jumlah; $ulang++) {
        echo "Data Siswa ke-$ulang<br>";
        echo "<form action=3.php method=post>";
        echo "<table>";
        echo "<tr><td>NIS</td>";
        echo "<td>:</td>";
        echo "<td><input type=text name=nis></td></tr>";
        echo "<tr><td>Nama</td>";
        echo "<td>:</td>";
        echo "<td><input type=text name=nama></td></tr>";
        echo "<tr><td>Kelas</td>";
        echo "<td>:</td>";
        echo "<td><input type=text name=kelas></td></tr>";
        echo "<tr><td>Bahasa Indonesia</td>";
        echo "<td>:</td>";
        echo "<td><input type=number name=indonesia></td></tr>";
        echo "<tr><td>Bahasa Inggris</td>";
        echo "<td>:</td>";
        echo "<td><input type=number name=inggris></td></tr>";
        echo "<tr><td>Matematika</td>";
        echo "<td>:</td>";
        echo "<td><input type=number name=mtk></td></tr>";
        echo "<tr><td>Produktif</td>";
        echo "<td>:</td>";
        echo "<td><input type=number name=produktif></td></tr>";
        echo "</table>";
        echo "<br>";
    }
    echo "<tr><td></td>";
    echo "<td></td>";
    echo "<td><input type=submit name=simpan value=kirim></td></tr>";
    echo "</form>";
}
?>