<?php
include 'koneksi.php';
// save data into var
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// query for inserting data
$query = "INSERT INTO mahasiswa SET nim='$nim',nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat' ";
mysqli_query($koneksi, $query);

header("location:index.php");
?>