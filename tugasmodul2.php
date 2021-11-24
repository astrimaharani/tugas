<?php
use Produk as globalproduk;


class Produk {
    public $jenis ="";
    public $merek ="";
    public $stock ="100";
    
    public function pesanproduk(){
        $this->stock-=1;
        return $this->jenis."".$this->merek."dipesan...";
    }
    public function sisastock(){
        return "stocksisa".$this->stock;
    }
}
$produk01 =new Produk();
$produk01->jenis ="kosmetik";
$produk01->merek="Ms.Glow";
$produk01->stock="30";

//$produk02 =new produk();
//$produk02->jenis="mesin cuci";
//$produk02->merek="LG";

echo $produk01->pesanproduk();
echo "<br>";
echo $produk01->sisastock();
//echo"<br>";
//echo $produk02->pesanproduk();
?>