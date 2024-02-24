<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata diri</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2>
        <!-- form -->
            <form method = "POST" action= "forminput2.php">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name = "nama"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name = "tanggal"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                        <input type="radio" name = "jk" value = "Laki Laki">Laki Laki
                        <input type="radio" name = "jk" value = "Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" cols="30" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Agama</label></td>
                        <td>:</td>
                        <td>
                        <select name="agama">
                            <option value=""></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Pendidikan Terakhir</label></td>
                        <td>:</td>
                        <td>
                        <select name="pendidikan">
                            <option value=""></option>
                            <option value="TK">TK</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK">SMK</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Status</label></td>
                        <td>:</td>
                        <td>
                        <select name="status">
                            <option value=""></option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Bekerja">Bekerja</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td><input type="text" name = "hobi"></td>
                    </tr>
                    <tr>
                        <td>Cita Cita</td>
                        <td>:</td>
                        <td><input type="text" name = "cita"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="simpan" value = "kirim"></td>
                    </tr>
                </table>
            </form>
    </center>
</body>
</html>