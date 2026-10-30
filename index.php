<?php

//panggil file propert-constant
require('./Property-Constant.php');

use pbo\Marketplace\Produk;

//object
$produk = new produk('P0001', 'Laptop', 10000000, 5);



//hasil
echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: Rp. " . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak() ."%"; 
echo"<br/>";
echo "Total harga setelah pajak: Rp. " . $produk->total();
