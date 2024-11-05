<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;
}

$produk1 = new Produk();
$produk1->jenis = "Televisi";
$produk1->merek = "Samsul";
$produk1->stok = 20;

$produk2 = new Produk();
$produk2->jenis = "Kulkas";
$produk2->merek = "Samsul";
$produk2->stok = 40;

print_r($produk1);
echo "<br>";
print_r($produk1);