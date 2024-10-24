<?php require 'barang.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    
    <h1>Barang</h1>

    <form method="POST" action="">
        <label for="Nama Barang">Nama Barang</label>
        <input type="text" id= "Nama Barang" name="NamaBarang" required> <br> <br> 
        <label for="stok">Stok Awal:</label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="pembelian">Jumlah Pembelian:</label>
        <input type="number" id="pembelian" name="pembelian" required><br><br>

        <input type="submit" value="Hitung Stok Akhir">
    </form>

    <?php if ($stokAkhir !== null):?>
        <?php echo $NamaBarang; ?>
        <h2>Hasil <?php echo $stokAkhir; ?></h2>
    <?php endif;?>
</body>
</html>