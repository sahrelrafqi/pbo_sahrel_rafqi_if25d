<?php

class Produk {
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

}

//object
$produk = new Produk ();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = produk::PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK
;

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "produk: ". $produk->nama;
echo "<br>";
echo "harga: ". $produk->harga;
echo "<br>";
echo "stok: ". $produk->stok;
echo "<br>";
echo "pajak: ".$pajak. "%";
echo "<br>";
echo "total harga setelah pajak: ". $total;