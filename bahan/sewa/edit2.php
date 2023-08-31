<?php include '../koneksi.php';
?>


<?php

$id = $_POST['id'];
$nama = $_POST['tanggal'];
$lapangan = $_POST['lapangan'];
$jam = $_POST['jam'];
$jabatan = $_POST['jabatan'];


mysqli_query($koneksi, "update sewa set jenis_lapangan='$lapangan', tanggal='$nama', jam='$jam', nama='$jabatan' where id_sewa='$id'");

header('location:../../index2.php');
?>