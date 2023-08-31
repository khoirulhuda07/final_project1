<?php include '../koneksi.php';
?>


<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];


mysqli_query($koneksi, "update karyawan set nama_karywan='$nama', alamat_karyawan='$alamat', jabatan='$jabatan' where id_karyawan='$id'");

header('location:../../index2.php');
?>