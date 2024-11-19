<?php
abstract class Produk {
    abstract public function cekHarga();

    public function cekStok(){
        return $this->stok;
    }
}

class Televisi extends Produk{
    public function cekHarga(){
        return 3000000;
    }

}

$produk01 = new Televisi();
echo $produk01->cekHarga();

echo "<br>";

echo $produksi01->cekStok();