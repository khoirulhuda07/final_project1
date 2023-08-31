<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data jadwal</title>
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
        <h1>TAMBAH DATA JADWAL</h1>
    </header>
    <br>
    <a href="../../index2.php">kembali</a>
    <form action="tambah2.php" method="post">
        <h3>masukkan data</h3>
        <table>
            <tr>
                <td>id jadwal</td>
                <td>:</td>
                <td><input type="number" name="id" placeholder="id jadwal" required></td>
            </tr>
            <tr>
                <td>hari</td>
                <td>:</td>
                <td><input type="text" name="hari" placeholder="hari" required></td>
            </tr>
            <tr>
                <td>jam buka</td>
                <td>:</td>
                <td><input type="time" name="buka" placeholder="jam buka" required></td>
            </tr>
            <tr>
                <td>jam tutup</td>
                <td>:</td>
                <td><input type="time" name="tutup" placeholder="jam tutup" required></td>
            </tr>
        </table>
        <br>
        <table align="center">
            <tr>
                <td><input class="btn" type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
</body>