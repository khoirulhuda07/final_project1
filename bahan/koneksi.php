<?php 
$local = 'localhost';
$user = 'root';
$pw = '';
$dbase = 'tugas3';

$koneksi =mysqli_connect($local, $user, $pw, $dbase);

/*if (!$koneksi) {
	die("koneksi gagal" . mysql_connect_eror());
}else{
	echo "Koneksi ke database berhasil";
}*/


$data = mysqli_query($koneksi, 'select * from akun');
$akun = mysqli_fetch_assoc($data);
$data1 = mysqli_query($koneksi, 'select * from karyawan');
$data2 = mysqli_query($koneksi, 'select * from jadwal');

$data3 = mysqli_query($koneksi, 'select * from sewa');