<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #E1FFB1;
        }
        header {
            text-align: center;
            padding: 7px;
            background-color: #B6E388;
        }
        .btn {
            padding: 10px;
            border-radius: 10px;
        }
        .btn:hover{
            cursor: pointer;
            padding: 14px;
            background-color: yellowgreen;
        }
        h1 {
            text-align: center;
        }
        h3{
            text-align: center;
        }
        form {
                margin: auto;
    box-shadow:  2px 2px 19px 3px rgba(0,0,0,0.75);
    width: 300px;
    height: 220px;
    background-color:  #38E54D;
    border-radius: 12px;
        }

        a {
            margin-left: 54%;
            color: black;
            text-decoration: none;
            background-color: yellowgreen;
            padding: 7px;
            border-radius: 10px;
        }
        a:hover{
            padding: 12px;
            cursor: pointer;
            box-shadow: 0px 0px 10px black;
        }
    </style>
</head>
<body>
    <header>
        <h1>EDIT DATA KARYAWAN</h1>
    </header>
    <br>
    <a href="../../index2.php">kembali</a>
<?php
include '../koneksi.php';

$id = $_GET['id_sewa'];
$edit = mysqli_query($koneksi, "select * from sewa where id_sewa= '$id' ");

while ($edit1 = mysqli_fetch_array($edit)) { ?>
    <form action="edit2.php" method="post">
        <h3>masukkan data</h3>
        <table>
            <tr>
                <td>id penyewa</td>
                <td>:</td>
                <td><input type="text" value="<?php echo $edit1['id_sewa']; ?>" name='id' readonly></td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal"
                    value="<?php echo $edit1['tanggal']; ?>"></td>
            </tr>
            <tr>
                <td>jenis lapangan</td>
                <td>:</td>
                <td><input type="text" name="lapangan" value="<?php echo $edit1['jenis_lapangan'] ?>"></td>
            </tr>
            <tr>
                <td>jam</td>
                <td>:</td>
                <td><input type="text" name="jam" value="<?php echo $edit1['jam']; ?>"></td>
            </tr>
            <tr>
                <td>atas nama</td>
                <td>:</td>
                <td><input type="text" name="jabatan" value="<?php echo $edit1['nama'];?>"></td>
            </tr>
        </table>
        <br>
        <table align="center">
            <tr>
                <td><input class="btn" type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
<?php
} ?>
    
</body>