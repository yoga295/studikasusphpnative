<?php
session_start();
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$passwords = $_POST['passwords'];

// menyeleksi data pada tabel admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND passwords='$passwords'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:login.php");
} else {
    header("location:pesanan.php");
}