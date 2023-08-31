<?php include '../koneksi.php';

$id = $_POST['id'];
$hari = $_POST['hari'];
$buka = $_POST['buka'];
$tutup = $_POST['tutup'];


mysqli_query($koneksi, "update jadwal set hari='$hari', buka='$buka', tutup='$tutup' where id_jadwal='$id'");

header('location:../../index2.php');