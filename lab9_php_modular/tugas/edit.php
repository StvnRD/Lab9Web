<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Barang</title>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$database = mysqli_query($conn,"SELECT * FROM data_barang WHERE id_barang='$id'");
    $d = mysqli_fetch_array($database);
    function is_select($var, $val) {
        if ($var == $val) return 'selected="selected"';
        return false;
       }    
	?>
</head>
<body>
	<div class="containers">
    <br/><br/><a href="index.php">Kembali</a>
    <h2><font color='#073b4c'>EDIT</font></h2>
    <hr>
    		<form method="post" action="updatepage.php">
			<div class="input">
                <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
                <label><font color='#073b4c'>Nama Barang</font></label>
				<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
            </div>
            <div class="input">
                <label><font color='#073b4c'>Kategori</label>
                <input type="text" name="kategori" value="<?php echo $d['kategori']; ?>">
            </div>
            <div class="input">
                <label><font color='#073b4c'>Harga Beli</font></label>
                <input type="text" name="harga_beli" value="<?php echo $d['harga_beli']; ?>">
            </div>
            <div class="input">
                <label><font color='#073b4c'>Harga Jual</font></label>
                <input type="text" name="harga_jual" value="<?php echo $d['harga_jual']; ?>">
            </div>
            <div class="input">
                <label><font color='#073b4c'>Stok</font></label>
                <input type="text" name="stok" value="<?php echo $d['stok']; ?>">
            </div>
            <div class="input">
                <label><font color='#073b4c'>Gambar</font></label>
                <input type="text" name="gambar" value="<?php echo $d['gambar']; ?>">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="EDIT">
            </div>
		</form>
		<?php 
	?>
    </div>
</body>
</html>
