<?php
class Customer {
    public $namaCustomer;
    public $alamatCustomer;
    public $nomorHPCustomer;
    public $idCustomer;

    public function __construct($namaCustomer = '', $alamatCustomer = '', $nomorHPCustomer = '', $idCustomer = '') {
        $this->namaCustomer = $namaCustomer;
        $this->alamatCustomer = $alamatCustomer;
        $this->nomorHPCustomer = $nomorHPCustomer;
        $this->idCustomer = $idCustomer;
    }

    public function profileUser () {
        return $this->namaCustomer . ' | ' . $this->alamatCustomer . ' | ' . $this->nomorHPCustomer . ' | ' . $this->idCustomer;
    }
}

$Profile = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panggilCustomer = new Customer;
    $panggilCustomer->namaCustomer = $_POST['namaCust'];
    $panggilCustomer->alamatCustomer = $_POST['alamat'];
    $panggilCustomer->nomorHPCustomer = $_POST['noHP'];
    $panggilCustomer->idCustomer = $_POST['idCust'];

    $Profile = $panggilCustomer->profileUser ();
}
?>