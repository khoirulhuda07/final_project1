<?php include '../koneksi.php';
?>


<?php

$id = $_GET['id_karyawan'];


mysqli_query($koneksi,"delete from karyawan where id_karyawan='$id'");

header('location:../../index2.php');
?>