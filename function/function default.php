<?php
function smk($jurusan, $kelas, $nama = "") {
    return $jurusan . $kelas . $nama;
}

$sekolah = smk("RPL ", "XI RPL 2 ", "");

echo $sekolah;

?>