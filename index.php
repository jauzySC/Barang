<?php
class Barang {
    public $NamaBarang;
    public $JenisBarang;
    public $JumlahBarang;
    public $stok;
    public $pembelian;


    public function __construct($NamaBarang = '', $JenisBarang = '', $JumlahBarang = 0, $stok = 0, $pembelian = 0,) {
        $this->NamaBarang = $NamaBarang;
        $this->JenisBarang = $JenisBarang;
        $this->JumlahBarang = $JumlahBarang;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
       
    }

    public function StokAkhirBarang() {
        $this->stok = $this->stok - $this->pembelian;
        return $this->stok;
    }
    public function detailBarang () {
        return $this->NamaBarang . ' | ' . $this->JenisBarang . ' | ' . $this->JumlahBarang . ' | ' . $this->stok . ' | ' . $this->pembelian;
    }
}

$stokAkhir = null;
$NamaBarang = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $panggilBarang= new Barang();
   $panggilBarang -> NamaBarang = $_POST['NamaBarang'];
   $panggilBarang -> JenisBarang = $_POST['JenisBarang'];
   $panggilBarang->stok = intval($_POST['stok']);
   $panggilBarang->pembelian = intval($_POST['pembelian']);
   
   $Stokakhir = $panggilBarang->stokAkhirBarang();
    $Detailbarang = $panggilBarang->detailBarang();
}
?>