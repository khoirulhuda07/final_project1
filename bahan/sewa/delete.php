<?php include '../koneksi.php';
?>


<?php

$id = $_GET['id_sewa'];


mysqli_query($koneksi,"delete from sewa where id_sewa='$id'");

header('location:../../index2.php');
?>