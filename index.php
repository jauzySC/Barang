<?php
class Barang{
    public $NamaBarang;
    public $JenisBarang;
    public $JumlahBarang;
    public $stok;
    public $pembelian;
    public $expired;


    //construct
public function __construct($NamaBarang = '',$JenisBarang = '',$JumlahBarang = 0,$stok = 0, $pembelian = 0,$expired = 0) {
    $this -> NamaBarang = $NamaBarang;
    $this -> JenisBarang = $JenisBarang;
    $this -> JumlahBarang = $JumlahBarang;
    $this -> stok = $stok;
    $this -> pembelian = $pembelian;
    $this -> expired = $expired;
}
public function StokAkhirBarang(){
//mulai menghitung
$this-> stok =  ($this ->stok - $this-> pembelian);
return $this->stok;
}

}


$stokAkhir = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Membentuk instance/objek baru dari class produk
    $panggilBarang = new Barang ();
    $panggilBarang -> NamaBarang = $_POST['NamaBarang'];
    $panggilBarang -> JenisBarang = $_POST['JenisBarang'];
    $panggilBarang -> JumlahBarang = intval($_POST['JumlahBarang']);
    $panggilBarang -> stok = intval($_POST['stok']);
    $panggilBarang -> pembelian = intval($_POST['pembelian']);

    $NamaBarang = $panggilBarang -> NamaBarang;

    //perhitungan akhir sebuah produk
    $stokakhir = $panggilBarang->StokAkhirBarang();
}

?>