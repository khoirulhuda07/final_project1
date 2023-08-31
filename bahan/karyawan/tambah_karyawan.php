<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
    </style>
</head>
<body>
    <header>
        <h1>TAMBAH DATA KARYAWAN</h1>
    </header>
    <form action="tmbh_krywn.php" method="post">
        <h3>masukkan data</h3>
        <table>
            <tr>
                <td>id karyawan</td>
                <td>:</td>
                <td><input type="number" name="id" placeholder="id karyawan" required></td>
            </tr>
            <tr>
                <td>nama karywan</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="nama karyawan" required></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="alamat" required></td>
            </tr>
            <tr>
                <td>jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" placeholder="jabatan" required></td>
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