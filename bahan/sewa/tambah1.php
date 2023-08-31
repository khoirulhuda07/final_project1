<?php include '../koneksi.php';

$id = $_POST['id'];
$tanggal = $_POST['hari'];
$lapangan = $_POST['lapangan'];
$jam = $_POST['jam'];
$nama = $_POST['nama'];


mysqli_query($koneksi, "insert into sewa values('$id', '$tanggal', '$lapangan', '$jam', '$nama')");


header('location:../../index2.php');
