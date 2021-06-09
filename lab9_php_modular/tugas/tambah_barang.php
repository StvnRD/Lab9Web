<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $file_gambar = $_POST['gambar'];
    if ($file_gambar['error'] == 0)
    
    $data ="INSERT INTO data_barang (kategori, nama, harga_beli, harga_jual, stok, gambar) VALUES('$kategori','$nama','$harga_beli','$harga_jual','$stok','$file_gambar')";
    mysqli_query($conn, $data);
    header('location: index.php');
}
?>
