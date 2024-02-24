<?php
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indonesia = $_POST['indonesia'];
    $inggris = $_POST['inggris'];
    $mtk = $_POST['mtk'];
    $produktif = $_POST['produktif'];

    echo "<table>
    <tr>
    <td>
    Nis
    </td>
    <td>
    :
    </td>
    <td>
    $nis
    </td>
    </tr>
    </table>";
}
?>