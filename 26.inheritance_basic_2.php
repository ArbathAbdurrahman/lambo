<?php

class Produk{
  public $merek="Sharp";
  public $stok=50;

  public function cekStok(){
    return "Sisa stok :".$this->stok;
  }

}

class Televisi extends Produk{
  public $jenis="Televisi";

  public function cekstokTelevisi(){
    return $this->jenis." ".$this->merek.", ".$this->cekStok();
  }
}

$produk01 = new Televisi();
echo $produk01->jenis;
echo "<br>";
echo $produk01->cekStokTelevisi();
?>
