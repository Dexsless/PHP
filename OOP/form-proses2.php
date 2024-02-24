<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .card {
            max-width: 25rem;
            min-height: 20rem;
            margin-top: 4rem;
            margin-bottom: 3rem;
            border: none;
            box-shadow: 0 0 10px rgba(0.5, 0.5, 0.5, 1);
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
            border-radius: 10px 10px 0 0;
            padding: 10px;
        }
        body {
            background-color: #222;
            color: #ddd;
            font-family: Arial, sans-serif;
            background-image: url('https://source.unsplash.com/random/1920x1080/?nature,landscape');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 34rem;
        }
        .navbar {
            background-color: #000;
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
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form.php">Pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">Data Ortu <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" type="submit" style="background-color: #222;">Search</button>
    </form>
  </div>
</nav>
<!-- /Navbar -->
    <center>
</body>
</html>
<?php

if (isset($_POST['submit'])){
    $nama_ayah = $_POST['nama_ayah'];
    $tanggal_ayah = $_POST['tanggal_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $tanggal_ibu = $_POST['tanggal_ibu'];

    class hasil{
        public function pendaftaran($nama_ayah2,$tanggal_ayah2,$nama_ibu2,$tanggal_ibu2){
    echo "<div class='card text-white bg-dark mb-2'>
            <div class=card-header><h3>Hasil Pendaftaran</h3></div>
                <div class=card-body>
                    <h5 class=card-title>Data Ortu</h5>
                    <table>
                        <tr><th>Nama ayah </th><td>: </td><td> $nama_ayah2 </td></tr>
                        <tr><th>Tanggal Lahir Ayah </th><td>:  </td></th><td> $tanggal_ayah2 </td></tr>
                        <tr><th>Nama ibu </th><td>:  </td></th><td> $nama_ibu2 </td></tr>
                        <tr><th>Tanggal Lahir Ibu </th><td>:  </td></th><td> $tanggal_ibu2 </td></tr>
                    </table>
              </div>
          </div>";
        
        }
    }

$cetak = new hasil();

echo $cetak->pendaftaran($nama_ayah,$tanggal_ayah,$nama_ibu,$tanggal_ibu);

}

?>