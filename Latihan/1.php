<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="post">
    <div style="margin-bottom: 1rem;">
        <label>Pilihan Kelas</label> <br>
        <input type="checkbox" name="kelas[]" value="Pemula"> Pemula <br>
        <input type="checkbox" name="kelas[]" value="Menengah"> Menengah <br>
        <input type="checkbox" name="kelas[]" value="Lanjutan"> Lanjutan
    </div>
    <div>
        <button>Submit</button>
    </div>
    </form>
</body>
</html>