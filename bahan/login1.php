<?php 
include 'koneksi.php';

session_start()

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pw'];

    // Mencocokkan username dan password dengan data di database
    $query = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        // Login berhasil
        echo "Login berhasil!";
    } else {
        // Login gagal
        echo "Login gagal. Silakan periksa kembali username dan password Anda.";
    }
}
?>
