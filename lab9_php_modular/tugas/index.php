<?php
include "koneksi.php";

//query menampilkan data
$database = "SELECT * FROM data_barang";
$print = mysqli_query($conn, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lab9 PHP Modularisasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="containers">
        <h1>Data Barang</h1>
        <hr>
            <a div class="container" href="input.php"><h3>Tambah Barang</h3></a>
            <div class="main">
                <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th class="mini">Aksi</th>
                </tr>
    <?php if($print): ?>
    <?php while($a = mysqli_fetch_array($print)): ?>
    <tr>
        <td><?= $a['gambar'];?></td>
        <td><?= $a['nama'];?></td>
        <td><?= $a['kategori'];?></td>
        <td>Rp. <?= $a['harga_beli'];?></tdclass=>
        <td>Rp. <?= $a['harga_jual'];?></td>
        <td><?= $a['stok'];?></td>
        <td>
            <a href="edit.php?id=<?php echo $a['id_barang']; ?>">Edit</a> | 
            <a href="delete.php?id=<?php echo $a['id_barang']; ?>">Hapus</a></td>
    </tr>
    <?php endwhile; else: ?>
    <tr>
        <td colspan="7">Belum ada data</td>
    </tr>
    <?php endif; ?>
    </table>
    </div>
    </div>
</body>
</html>
