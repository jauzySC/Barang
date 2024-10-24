<?php require 'index.php'; ?>
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
        <label for="NamaBarang">Nama Barang</label>
        <input type="text" id="NamaBarang" name="NamaBarang" required><br><br>

        <label for="stok">Stok Awal:</label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="pembelian">Jumlah Pembelian:</label>
        <input type="number" id="pembelian" name="pembelian" required><br><br>

        <input type="submit" value="Hitung Stok Akhir">
    </form>

    <?php if ($stokAkhir !== null): ?>
        <h2>Stok akhir untuk barang "<?php echo htmlspecialchars($NamaBarang); ?>" adalah: <?php echo $stokAkhir; ?></h2>
    <?php endif; ?>
</body>
</html>
