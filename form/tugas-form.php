<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form</title>
</head>
<body>
    <center>
<form action="proses-tugas-form.php" method="POST">
<table border="1">
    <h1>Form Pendaftaran</h1>
    <tr><td>
    <div style="margin-bottom: 5px;">
        <label>Nama</label> <br>
        </td><td>
        <input type="text" name="nama">
        </td>
    </div>
    </tr>
    <tr><td>
    <div style="margin-bottom: 5px;">
        <label>Jenis Kelamin</label> <br>
        </td><td>
        <input type="radio" name="jenis" value="Pria"> Pria 
        <input type="radio" name="jenis" value="Wanita"> Wanita
        </td>
    </div>
    </tr><tr><td>
    <div style="margin-bottom: 5px;">
        <label>Tanggal Lahir</label> <br>
        </td><td>
        <input type="date" name="tanggal">
    </td>
    </div>
    </tr>
    <tr><td>
    <div style="margin-bottom: 5px;">
        <label>Kategori Olahraga</label> <br>
        </td>
        <td>
        <input type="radio" name="kategori" value="Sepak Bola"> Sepak Bola <br>
        <input type="radio" name="kategori" value="Bulu Tangkis"> Bulu Tangkis <br>
        <input type="radio" name="kategori" value="Renang"> Renang
    </td>
    </div>
    </tr>
    <tr><td>
    <div style="margin-bottom: 5px;">
        <label>Pilihan Kelas</label><br>
        </td>
        <td>
            <input type="checkbox" id="kelas1" name="kelas[]" value="Pemula">
        <label for="kelas1">Pemula</label><br>
            <input type="checkbox" id="kelas2" name="kelas[]" value="Menengah">
        <label for="kelas2">Menengah</label><br>
            <input type="checkbox" id="kelas3" name="kelas[]" value="Lanjutan">
        <label for="kelas3">Lanjutan</label>
        </td>
    </div>
    </tr>
    <tr><td>
    <div style="margin-bottom: 5px;">
        <label>Kemampuan Fisik</label> <br>
        </td>
        <td>
        <textarea name="kemampuan" cols="30" rows="4"></textarea>
        </td>
    </div>
    </tr>
    <tr><td>
    <div style="margin-bottom: 5px;">
        <label>Metode Pembayaran</label></td> <br>
        <td>
        <select name="metode">
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select>
    </td>
    </div>
    </tr>
    <tr><td>
        Konfirmasi :
    </td>
        <td>
    <div>
        <button>Submit</button>
    </div>
    </td></tr>
    </table>
</form>
</center>
</body>
</html>