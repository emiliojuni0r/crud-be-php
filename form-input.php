<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form inputan data</title>
</head>
<body>
    <h2>insert new data</h2>
    <form method="post" action="simpan.php">
        <table>
            <tr><td>NIM</td><td><input type="text" name="nim" onkeyup="isi_otomatis()"></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
            <tr><td>JENIS KELAMIN</td><td>
                <input type="radio" name="jenis_kelamin" value="L">Laki laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
            </td></tr>
            <tr><td>JURUSAN</td><td>
                <select name="jurusan">
                    <option value="TRPL">TRPL</option>
                    <option value="TRI">TRI</option>
                    <option value="TRIK">TRIK</option>
                    <option value="TRE">TRE</option>
                </select>
            </td></tr>
            <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
        </table>
    </form>
</body>
</html>