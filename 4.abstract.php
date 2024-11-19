<?php
abstract class Produk {
    abstract public function cekHarga();
}

class Televisi extends Produk{
    public function cekHarga(){
        return 3000000;
    }

}
class MesinCuci extends Produk{
    public function cekHarga(){
        return 3000000;
    }

}

$produk01 = new MesinCuci();
echo $produk01->cekHarga();