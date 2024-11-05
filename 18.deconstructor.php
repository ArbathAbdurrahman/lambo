<?php
class Produk {
    public function __construct() {
        echo "Constructor dijalankan... <br>";

    }
    public function __destruct() {
        echo "Constructor dijalankan... <br>";

    }
}

$produk1 = new Produk();
$produk2 = new Produk();