<?php
class Customer {
    public $namaCustomer;
    public $alamatCustomer;
    public $nomorHPCustomer;

    public function __construct($namaCustomer = '', $alamatCustomer = '', $nomorHPCustomer = '') {
        $this->namaCustomer = $namaCustomer;
        $this->alamatCustomer = $alamatCustomer;
        $this->nomorHPCustomer = $nomorHPCustomer;
       
    }

    public function profileUser () {
        return $this->namaCustomer . ' | ' . $this->alamatCustomer . ' | ' . $this->nomorHPCustomer;}
}

$Profile = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panggilCustomer = new Customer;
    $panggilCustomer->namaCustomer = $_POST['namaCust'];
    $panggilCustomer->alamatCustomer = $_POST['alamat'];
    $panggilCustomer->nomorHPCustomer = $_POST['noHP'];
    $Profile = $panggilCustomer->profileUser ();
}
?>