<?php

//panggil file propert-constant
require('./jasa.php');

use pbo\Marketplace\jasa;

//object
$produk = new jasa();

$produk->setKode('POO1')
        ->setNama("Laptop")
        ->setHarga(10000000)
        ->setStok(5);



//hasil
echo "Produk: " . $produk->getNama() . "<br>";
echo "Harga: Rp. " . $produk->getHarga() . "<br>";
echo "Stok: " . $produk->getStok() . "<br>";
echo "Pajak: " . $produk->pajak() ."%"; 
echo "<br>";
echo "<br>";
echo "Total harga setelah pajak: Rp. " . $produk->total();

echo "Metode Pembayaran: ". $produk->payment('qris');
