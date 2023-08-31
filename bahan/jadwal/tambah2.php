<?php include '../koneksi.php';

$id = $_POST['id'];
$hari = $_POST['hari'];
$buka = $_POST['buka'];
$tutup = $_POST['tutup'];


mysqli_query($koneksi, "insert into jadwal values('$id', '$hari', '$buka', '$tutup')");


header('location:../../index2.php');