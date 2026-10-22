<?php

class Produk {
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;
     
    public function pajak(){
        return self::PAJAK*100;//11%


    }

    public function total(){
        return $this->harga * ($this->harga * self::PAJAK);
    }
}

//objectw2
$produk = new Produk ();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;


//hasil
echo "produk: ". $produk->nama;
echo "<br>";
echo "harga: ". $produk->harga;
echo "<br>";
echo "stok: ". $produk->stok;
echo "<br>";
echo "pajak: ".$pajak->pajak(). "%";
echo "<br>";
echo "total harga setelah pajak: ". $produk->total();