<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form</title>
</head>
<body>
<form action="proses-tugas-form.php" method="POST">
    <h1>Form Pendaftaran</h1>
    <div style="margin-bottom: 1rem;">
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis" value="Pria"> Pria 
        <input type="radio" name="jenis" value="Wanita"> Wanita
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kategori Olahraga</label> <br>
        <input type="radio" name="kategori" value="Sepak Bola"> Sepak Bola <br>
        <input type="radio" name="kategori" value="Bulu Tangkis"> Bulu Tangkis <br>
        <input type="radio" name="kategori" value="Renang"> Renang
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Pilihan Kelas</label> <br>
        <input type="checkbox" name="kelas" value="Pemula"> Pemula <br>
        <input type="checkbox" name="kelas" value="Menengah"> Menengah <br>
        <input type="checkbox" name="kelas" value="Lanjutan"> Lanjutan
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kemampuan Fisik</label> <br>
        <textarea name="kemampuan" cols="30" rows="4"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Metode Pembayaran</label> <br>
        <select name="metode">
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>
</body>
</html>