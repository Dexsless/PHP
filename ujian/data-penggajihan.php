<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Pendaftaran</title>
<!-- CSS -->
<style>
  body {
    background-color: #222;
    color: #ddd;
    font-family: 'Courier New', Courier, monospace;
    background-image: url('https://source.unsplash.com/random/1920x1080/?nature,landscape');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .navbar {
    background-color: #1a1a1a;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    position: relative;
  }

  .navbar:before {
    content: "";
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index: -1;
    background-image: radial-gradient(circle at 50% 0, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 75%);
  }

  .navbar a {
    color: #ddd;
    padding: 14px 16px;
    text-decoration: none;
  }

  .navbar a:hover {
    background-color: #444;
  }

  .card {
    background-color: #333;
    border: none;
    box-shadow: 0 0 10px rgba(0.5, 0.5, 0.5, 1);
    margin-top: 20px;
    padding: 20px;
    border-radius: 10px;
    position: relative;
  }

  .card:before {
    content: "";
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index: -1;
    background-image: radial-gradient(circle at 50% 0, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 75%);
  }

  .card-header {
    background-color: #444;
    border-radius: 10px 10px 0 0;
    padding: 10px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-control {
    background-color: #444;
    border: none;
    border-radius: 0;
    color: #ddd;
    padding: 6px 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .form-control:focus {
    box-shadow: 0 2px 4px rgba(0, 123, 255, 0.5);
  }

  .btn {
    background-color: #4CAF50;
    border: 1;
    border-radius: 1;
    color: #fff;
    padding: 6px 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

  .btn:hover {
    background-color: #45a049;
  }
  #place {
    background-color: #444;
    color: #fff;
    min-width: 58rem;
    min-height: 2rem;
  }
  #place2 {
    background-color: #444;
    color: #fff;
    min-width: 23rem;
    min-height: 2rem;
  }
  #margarin {
    margin-top: 2rem;
  }
  #margarin2 {
    margin-top: 1rem;
  }
  #card {
    max-width: 50rem;
    max-height: fit-content;
    margin-left: auto;
    margin-right: auto;
    margin-top: 3rem;
  }
</style>
<!-- /CSS -->
  </head>
  <body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="../">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="data-penggajihan.php">Penggajihan<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<!-- /Navbar -->

<!-- Card -->
<div class="card mt-3 ml-5 mr-5">
  <div class="card-header">
    <h2 align="center">Penggajihan Guru/Karyawan Yayasan Assalaam</h2>
  </div>
  <div class="card-body">
    <!-- Form -->
<form method="POST" action="">
    <div class="form-group">
        <label for="No">No</label>
        <br>
        <input name="no" type="number" placeholder="No" id="place">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <br>
        <input name="nama" type="text" placeholder="Nama" id="place">
    </div>
    <div class="form-group">
        <label for="unit">Unit Pendidikan</label>
        <br>
        <select name="unit" id="place">
            <option value="">Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Gaji</label>
        <br>
        <input name="tanggal" type="date" name="tanggalgaji" id="place">
    </div>
    <!-- Gaji/Potongan -->
    <table align="center">
        <div class="form-group">
            <tr><th><h2 align="center">Gaji</h2></th>
                <td>
                    &nbsp;&nbsp;
                </td>
        <th><h2 align="center">Potongan</h2></th></tr>
        </div>
        <div class="form-group" id="margarin">
            <tr>
                <td>
                    <label for="" id="margarin">Jabatan</label>
                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <label for="" id="margarin">BPJS</label>
                </td>
            </tr>
            <tr>
                <td>
                    <select name="jabatan" id="place2">
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakasek">Wakasek</option>
                        <option value="Guru">Guru</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <input type="number" name="bpjs" id="place2" placeholder="BPJS">
                </td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td>
                    <label for="" id="margarin2">Lama Kerja</label>
                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <label for="" id="margarin2">Pinjaman</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="lama" id="place2" placeholder="Lama Kerja">
                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <input type="number" name="pinjaman" id="place2" placeholder="Pinjaman">
                </td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td>
                    <label for="" id="margarin2">Status Kerja</label>
                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <label for="" id="margarin2">Tabungan</label>
                </td>
            </tr>
            <tr>
                <td>
                    <select name="status" id="place2">
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                    </select>
                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <input type="number" name="tabungan" id="place2" placeholder="Tabungan">
                </td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td>

                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <label for="" id="margarin2">Lainnya</label>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    &nbsp;&nbsp;
                </td>
                <td>
                    <input type="number" name="lainnya" id="place2" placeholder="Lainnya">
                </td>
            </tr>
        </div>
    </table>
    <center>
    <button class="btn" name="submit" value="Submit" align="center" style="margin-top: 1rem; background-color:#444; color:antiquewhite;">Submit</button>
    </center>
</form>
    <!-- Form -->
  </div>
</div>
<!-- /Card -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

if (isset($_POST['submit'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $gaji = 0;
    $lama = $_POST['lama'];
    $status = $_POST['status'];
    $bonus = 0;
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $lainnya = $_POST['lainnya'];

if ($jabatan == "Kepala Sekolah") {
    $gaji += 5000000;
} else if ($jabatan == "Wakasek") {
    $gaji += 4000000;
} else if ($jabatan == "Guru") {
    $gaji += 3000000;
} else if ($jabatan == "Karyawan") {
    $gaji += 2000000;
}
if ($status == "Tetap") {
    $bonus += 1000000;
} else if ($jabatan == "Kontrak") {
    $bonus += 0;
}

    $gajibersih = $gaji + $bonus - $bpjs - $pinjaman - $lainnya;

    class hasil{
        public function pendaftaran($no2,$nama2,$unit2,$tanggal2,$jabatan2,$gaji2,$lama2,$status2,$bonus2,$bpjs2,$pinjaman2,$lainnya2,$gajibersih2){
    echo "<div class='card text-white bg-dark mb-2' id='card'>
            <div class=card-header align=center><h3>Data Gajian Guru/Karyawan Yayasan Assalaam</h3></div>
                <div class=card-body>
                    <h5 class=card-title align='center'>Data Gajian</h5>
                    <table align='center'>
                        <tr><th>NO </th><td>: </td><td> $no2 </td></tr>
                        <tr><th>Nama </th><td>:  </td></th><td> $nama2 </td></tr>
                        <tr><th>Unit Pendidikan </th><td>:  </td></th><td> $unit2 </td></tr>
                        <tr><th>Tanggal Gajian </th><td>:  </td></th><td> $tanggal2 </td></tr>
                        <tr><th>Jabatan </th><td>:  </td></th><td> $jabatan2 </td></tr>
                        <tr><th>Gaji </th><td>:  </td></th><td>Rp. $gaji2 </td></tr>
                        <tr><th>Lama Kerja </th><td>:  </td></th><td> $lama2 Tahun </td></tr>
                        <tr><th>Status Kerja </th><td>:  </td></th><td> $status2 </td></tr>
                        <tr><th>Bonus </th><td>:  </td></th><td>Rp. $bonus2 </td></tr>
                        <tr><th>BPJS </th><td>:  </td></th><td>Rp. $bpjs2 </td></tr>
                        <tr><th>Pinjaman </th><td>:  </td></th><td>Rp. $pinjaman2 </td></tr>
                        <tr><th>Lainnya </th><td>:  </td></th><td>Rp. $lainnya2 </td></tr>
                        <tr><th>Gaji Bersih </th><td>:  </td></th><td>Rp. $gajibersih2 </td></tr>
                    </table>
              </div>
          </div>";
        
        }
    }

$cetak = new hasil();

echo $cetak->pendaftaran($no,$nama,$unit,$tanggal,$jabatan,$gaji,$lama,$status,$bonus,$bpjs,$pinjaman,$lainnya,$gajibersih);

}

?>