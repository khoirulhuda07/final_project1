<?php include 'koneksi.php';
?>


<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];


mysqli_query($koneksi, "insert into karyawan values('$id', '$nama', '$alamat', '$jabatan')");

header('location:../index2.php');
?>