<?php require 'index.php'; ?>
<?php require 'customer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    <h1>Barang</h1>

    <div class="mb-3 border border-black rounded">
        <form method="POST" action="" class="p-5">
            <label for="stok">Nama:</label>
            <input class="form-control border-black" type="text" id="namaCust" name="namaCust" required><br>

            <label for="stok">Alamat:</label>
            <input class="form-control border-black" type="text" id="alamat" name="alamat" required><br>

            <label for="stok">No HP:</label>
            <input class="form-control border-black" type="tel" id="noHP" name="noHP" required><br>

            <label for="pembelian">Nama barang:</label>
            <input class="form-control border-black" type="text" id="namaBrng" name="namaBrng" required><br>

            <label for="pembelian">Jenis Barang:</label>
            <input class="form-control border-black" type="text" id="jenisBrng" name="jenisBrng" required><br>

            <label for="stok">Stok Awal:</label>
            <input class="form-control border-black" type="number" id="stok" name="stok" required><br>

            <label for="pembelian">Jumlah Pembelian:</label>
            <input class="form-control border-black" type="number" id="pembelian" name="pembelian" required><br><br>

            <input class="btn btn-dark" type="submit" value="Lihat Nota">
        </form>
    </div>


    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="card">
            <div class="card-header">
                Pembelian Berhasil!
            </div>
            <div class="card-body">
                <h5 class="card-title">Nota Pembelian</h5>
                <pre>
                    <p class="card-text">Nama      : <?php echo $panggilCustomer->namaCustomer; ?></p>
                    <p class="card-text">Alamat    : <?php echo $panggilCustomer->alamatCustomer; ?></p>
                    <p class="card-text">No. HP    : <?php echo $panggilCustomer->nomorHPCustomer; ?></p>
                    <p class="card-text">Barang    : <?php echo $panggilBarang->NamaBarang; ?></p>
                    <p class="card-text">Jenis     : <?php echo $panggilBarang->JenisBarang; ?></p>
                    <p class="card-text">
                        <small class="text-body-secondary">
                            Sisa stok : <?php echo $stokAkhir ; ?>
                        </small>
                    </p>
                </pre>
            </div>
        </div>
    <?php endif; ?>

</body>
</html>
