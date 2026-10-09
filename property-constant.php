<?php
class produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;
}

//object
$produk = new produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = produk::PAJAK * 100; //11%
$jumlahPajak = $produk->harga * produk::PAJAK; //output 1.100.000

//total
$total = $produk->harga + $jumlahPajak; //output 11.100.000

//hasil
echo "Produk: " . $produk->kode;
echo "<br/>";
echo "Harga: " . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $pajak ."%"; 
echo"<br/>";
echo "Total harga setelah pajak: Rp. " . $total;