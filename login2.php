<?php 
include 'bahan/koneksi.php';
?>


<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pw'];

    // Mencocokkan username dan password dengan data di database
    $query = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        // Login berhasil
        $row = $result->fetch_assoc();
        $userType = $row['sebagai'];
        if ($row['sebagai'] === 'admin' ) {
               header('location:index2.php');
                $_SESSION['username'] = $username;
        }else {
            header('location:index1.php');
             $_SESSION['sebagai'] = $userType;
        }

    } else {
        // Login gagal
        echo '<script>alert("Username atau password anda salah silahkan coba lagi");
        document.location="login.php";</script>';
}
   

}

/*$user = $_POST['user'];
$pw = $_POST['pw'];

$query = "select * from akun where username='$user' and password='$pw'";
$result = mysqli_query($koneksi, $query);
 if ($result->num_rows > 0) {
// Login berhasil
echo "Login berhasil!";
} else {
// Login gagal
 echo "Login gagal. Silakan periksa kembali username dan password Anda.";
}*/

?>