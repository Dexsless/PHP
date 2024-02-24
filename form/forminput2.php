
<?php
        echo "<br><center>";
            if (isset($_POST['simpan'])){
                $nama = $_POST['nama'];
                $tanggal = $_POST['tanggal'];
                $jk = $_POST['jk'];
                $alamat = $_POST['alamat'];
                $agama = $_POST['agama'];
                $pendidikan = $_POST['pendidikan'];
                $status = $_POST['status'];
                $hobi = $_POST['hobi'];
                $cita = $_POST['cita'];

            echo "========== Biodata Diri ==========<br>";
            echo "==================================<br>";
            echo "Nama = $nama<br>";
            echo "Tanggal Lahir = $tanggal<br>";
            echo "Jenis Kelamin = $jk<br>";
            echo "Alamat = $alamat<br>";
            echo "Pendidikan Terakhir = $pendidikan<br>";
            echo "Status = $status<br>";
            echo "Hobi = $hobi<br>";
            echo "Cita Cita = $cita<br>";
            }
        echo "</center>";
        ?>