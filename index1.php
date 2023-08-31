<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Website</title>
    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="bahan/4.css">
</head>
<?php include 'bahan/koneksi.php';

 session_start();
   if (!isset($_SESSION['sebagai'])) {
        header('location:login.php');
    }
    /*if (null !== isset ($_SESSION['sebagai'] === 'user')) {
        header('location:login.php');
    }*/ 
    
?>
<body>
    <div id="container">
        <header class="navbar-main">
              <div class="logo">
            WELCOME TO  WEBSITE<br>RSKY.SPORT       
             </div>
        </header>

        <div class="icon">
            <div class="icon1 tekan" id="menu-1">tentang kami</div>
            <div class="icon1" id="menu-4" style="font-size: 18px;">jenis lapangan</div>
            <div class="icon1" id="menu-2" >jadwal</div>
            <div class="icon1" id="menu-3" >sewa</div>
            <a href="?logout" class="icon2" >logout</a>
             <?php if (isset($_GET['logout'])) {
    // Menghapus semua data session
    session_destroy();

    // Mengarahkan pengguna ke halaman login
    header("Location:login.php");

  }
?>
        </div>
        

    <div class="conten tampil" id="menu-1-conten">
        <p class="kami">Welcome To My Website <br> Terima kasih sudah mengunjungi website kami. Silakan tekan menu di website ini.<br>
        Eenjooyy...</p>
    </div>
       <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="conten" id="menu-2-conten">
        <div>
            <h2 class="judul-data" >JADWAL LAPANGAN RSKY. SPORT</h2>
        </div>
        
        <table class="table">
            <tr>
                 <th class="text-table">NO</th>
                   <th class="text-table">id jadwal</th>
            <th class="text-table">hari</th>
            <th class="text-table">jam buka</th>
            <th class="text-table">jam tutup</th>

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
                </tr>

            <?php
            $nua++;
            } ?>
           
        </table>
    </div>
    <div class="conten" id="menu-3-conten">
         <div>
            <h2 class="judul-data" >DAFTAR PENYEWA LAPANGAN RSKY. SPORT</h2>
        </div>
        <table class="table">
            <tr>
              <th class="text-table">NO</th>
              <th class="text-table">id penyewa</th>
              <th class="text-table">jenis lapangan</th>
              <th class="text-table">Tanggal</th>
              <th class="text-table">jam</th>
              <th class="text-table">atas nama</th>
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
                    <td class="text-table"><?php echo $sewa['jenis_lapangan'] ?></td>
                    <td class="text-table"><?php echo $sewa['tanggal'] ?></td>
                    <td class="text-table"><?php echo $sewa['jam'] ?></td>
                    <td class="text-table"><?php echo $sewa['nama'] ?></td>
                </tr>
                <?php
                $nus++;
            } ?>
        </table>
        <p class="text">ingin booking lapangan silahkan hubungi no wa <b>085791417251<b></p>
    </div>
    <div class="conten" id="menu-4-conten">
        <table class="table1">
            <tr>
                <th>lapangan bulutangkis</th>
                <th>lapangan voli</th>
                <th>lapangan futsal</th>
            </tr>
        <tr>
            <td><img src="bahan/gambar/raket.jpg"></td>
            <td><img src="bahan/gambar/voli.jpg"></td>
            <td><img src="bahan/gambar/bola.jpg"></td>
        </tr>
        <tr>
            <td class="hrga" >harga : 40rb/jam</td>
            <td class="hrga">harga : 80rb/jam</td>
            <td class="hrga">harga : 100rb/jam</td>
        </tr>
        <tr>
            <td class="hrga">fasilitas : 1 botol air mineral besar</td>
            <td class="hrga">fasilitas : 2 botol air mineral besar</td>
            <td class="hrga">fasilitas : 2 botol air mineral besar dan bola</td>
        </tr>
        </table>
    </div>

    <script src="bahan/main.js"></script>
</body>
</html>