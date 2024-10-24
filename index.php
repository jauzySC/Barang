<?php
class Barang {
    public $NamaBarang;
    public $JenisBarang;
    public $JumlahBarang;
    public $stok;
    public $pembelian;
    public $expired;

    public function __construct($NamaBarang = '', $JenisBarang = '', $JumlahBarang = 0, $stok = 0, $pembelian = 0, $expired = 0) {
        $this->NamaBarang = $NamaBarang;
        $this->JenisBarang = $JenisBarang;
        $this->JumlahBarang = $JumlahBarang;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
        $this->expired = $expired;
    }

    public function StokAkhirBarang() {
        $this->stok = $this->stok - $this->pembelian;
        return $this->stok;
    }
}

$stokAkhir = null;
$NamaBarang = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and process form data
    $NamaBarang = $_POST['NamaBarang'] ?? '';
    $stok = intval($_POST['stok'] ?? 0);
    $pembelian = intval($_POST['pembelian'] ?? 0);

    // Membuat instance
    $panggilBarang = new Barang($NamaBarang, '', 0, $stok, $pembelian);
    $stokAkhir = $panggilBarang->StokAkhirBarang();
}
?>