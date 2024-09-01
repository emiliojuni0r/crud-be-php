<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List mahasiswa</title>
</head>
<body>
<h2>List mahasiswa</h2>
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th>ALAMAT</th></tr>
    <?php 
        include 'koneksi.php';
        $mahasiswa  = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        $no=1;

        foreach($mahasiswa as $row) {
            $jenis_kelamin = $row ['jenis_kelamin'] == 'P'?'Perempuan' : 'Laki laki';
            echo "
            <tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
            <td>".$row['alamat']."</td>
            <td><a href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
                <a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a>
            </td>
            </tr>";
            $no++;
        }
    ?>
</table>
<p>insert new data : </p> <a href="form-input.php"><button>click here</button></a>
</body>
</html>