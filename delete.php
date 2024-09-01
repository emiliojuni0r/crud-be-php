<?php
include 'koneksi.php';
// save data id into var
$id_mhs = $_GET['id_mhs'];
// query for delete data
$query = "DELETE from mahasiswa where id_mhs = '$id_mhs'";
mysqli_query($koneksi, $query);

// 
header("location:index.php")
?>