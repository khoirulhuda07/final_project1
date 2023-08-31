<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
 <link rel="stylesheet" type="text/css" href="bahan/7.css">
<?php include 'bahan/koneksi.php'; ?>

<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    }
      /*if (null !== isset($_SESSION['sebagai']) && ($_SESSION['sebagai'] === 'admin')) {
        header('location:login.php');
    }*/  ?>
</head>
<body class="body">
    <header class="header">
        <nav class="navbar">
            <div class="flex" style="font-size: 30px;"><img class="gmbr" src="bahan/gambar/logo.png"><span>Sport. </span><span>Rsky</span>
            <div class="menu"><div class="btn-menu tekan" id="menu-1">karywan</div><div class="btn-menu" id="menu-2" >jadwal</div><div class="btn-menu" id="menu-3" >sewa</div>
               <div class="user" id="user">Hi <?php echo $_SESSION ['username']; ?></div>
           </div>
            </div>
        </nav>
    </header>
    <div id="btn"  class="btn-logout hidden" >
        <a href="?logout" name="logout" >logout</a>

        <?php if (isset($_GET['logout'])) {
    // Menghapus semua data session
    session_destroy();

    // Mengarahkan pengguna ke halaman login
    header("Location:login.php");

  }
?>
    </div>
    <div class="conten" id="menu-1-conten">
        <div>
            <h2 class="judul-data" >DATA KARYAWAN</h2>
            <a class="btn-tmbh" href="bahan/karyawan/tambah_karyawan.php">tambah</a>
        </div>
        <table class="table">
            <tr>
            <th class="text-table">NO</th>
            <th class="text-table">id karyawan</th>
            <th class="text-table">Nama Karyawan</th>
            <th class="text-table">alamat</th>
            <th class="text-table">jabatan</th>
            <th class="text-table">tindakan</th>
        </tr>
        <?php
        $num = 1;
        while ($karyawan = mysqli_fetch_assoc($data1)) { ?>
        <tr>
            <td class="text-table"><?php echo $num; ?></td>
            <td class="text-table"><?php echo $karyawan['id_karyawan'] ?></td>
            <td class="text-table"><?php echo $karyawan['nama_karywan'] ?></td>
            <td class="text-table"><?php echo $karyawan['alamat_karyawan'] ?></td>
            <td class="text-table"><?php echo $karyawan['jabatan'] ?></td>
            <td class="text-table"><a href="bahan/karyawan/edit1.php?id_karyawan=<?php echo $karyawan['id_karyawan']; ?>">EDIT</a>
        <a href="bahan/karyawan/delete.php?id_karyawan=<?php echo $karyawan['id_karyawan']; ?>">HAPUS</a></td>
        </tr>
        
        <?php
        $num++;
        } ?>
            
        </table>
    </div>
    <div class="conten" id="menu-2-conten">
        <div>
            <h2 class="judul-data" >JADWAL RSKY. SPORT</h2>
            <a class="btn-tmbh" href="bahan/jadwal/tambah1.php">tambah</a>
        </div>
        <table class="table">
            <tr>
                 <th class="text-table">NO</th>
                   <th class="text-table">id jadwal</th>
            <th class="text-table">hari</th>
            <th class="text-table">jam buka</th>
            <th class="text-table">jam tutup</th>
              <th class="text-table">tindakan</th>

            </tr>

            <?php
            $nua = 1;
            while ($jadwal = mysqli_fetch_assoc($data2)) { ?>
                <tr>
                    <td class="text-table"><?php echo $nua; ?></td>
                    <td class="text-table"><?php echo $jadwal['id_jadwal'] ?></td>
                    <td class="text-table"><?php echo $jadwal['hari'] ?></td>
                    <td class="text-table"><?php echo $jadwal['buka'] ?></td>
                    <td class="text-table"><?php echo $jadwal['tutup'] ?></td>
                    <td class="text-table"><a href="bahan/jadwal/edit.php?id_jadwal=<?php echo $jadwal['id_jadwal'] ?>">EDIT</a><a href="bahan/jadwal/delete.php?id_jadwal=<?php echo $jadwal['id_jadwal'] ?>"> HAPUS</td>
                </tr>

            <?php
            $nua++;
            } ?>
           
        </table>
    </div>
    <div class="conten" id="menu-3-conten">
         <div>
            <h2 class="judul-data" >DAFTAR PENYEWA LAPANGAN RSKY. SPORT</h2>
            <a class="btn-tmbh" href="bahan/sewa/tambah.php">tambah</a>
        </div>
        <table class="table">
            <tr>
              <th class="text-table">NO</th>
              <th class="text-table">id penyewa</th>
              <th class="text-table">Tanggal</th>
              <th class="text-table">jenis lapangan</th>
              <th class="text-table">jam</th>
              <th class="text-table">atas nama</th>
              <th class="text-table">tindakan</th>  
            </tr>
            <tr>
            <?php
             $nus = 1;
            while ($sewa = mysqli_fetch_array($data3)) { 
               
                ?>

                <tr>
                    <td class="text-table"><?php echo $nus; ?></td>
                    <td class="text-table"><?php echo $sewa['id_sewa'] ?>
                    </td>
                    <td class="text-table"><?php echo $sewa['tanggal'] ?></td>
                    <td class="text-table"><?php echo $sewa['jenis_lapangan'] ?></td>
                    <td class="text-table"><?php echo $sewa['jam'] ?></td>
                    <td class="text-table"><?php echo $sewa['nama'] ?></td>
                    <td class="text-table"><a href="bahan/sewa/edit.php?id_sewa=<?php echo $sewa['id_sewa'] ?>">EDIT</a><a href="bahan/sewa/delete.php?id_sewa=<?php echo $sewa['id_sewa'] ?>"> HAPUS</td>
                </tr>
                <?php
                $nus++;
            } ?>
        </table>
    </div>
     <footer class="footer">
        <div>created by : Risky Wirayuda and Khoirul Huda</div>
    </footer>
    <script src="bahan/2.js"></script>
</body>
</html>