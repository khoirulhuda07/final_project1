<?php include '../koneksi.php';
?>


<?php

$id = $_GET['id_jadwal'];


mysqli_query($koneksi,"delete from jadwal where id_jadwal='$id'");

header('location:../../index2.php');
?>