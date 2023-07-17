<?php
$koneksi = new mysqli('localhost', 'root', '', 'kopisop') or die(mysqli_error($koneksi));

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nmPesanan = $_POST['nmPesanan'];
    $nmCustomer = $_POST['nmCustomer'];
    $harga = $_POST['harga'];
    $koneksi->query("INSERT INTO pesanan (id, nmPesanan, nmCustomer, harga) values ('$id', '$nmPesanan', '$nmCustomer', '$harga')");
    header('location:pesanan.php');
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM pesanan WHERE id = '$id'");
    header("location:pesanan.php");
}
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nmPesanan = $_POST['nmPesanan'];
    $nmCustomer = $_POST['nmCustomer'];
    $harga = $_POST['harga'];
    $koneksi->query("UPDATE pesanan SET id = '$id', nmPesanan = '$nmPesanan', nmCustomer = '$nmCustomer', harga = '$harga' WHERE id = '$id'");
    header("location:pesanan.php");
}
?>