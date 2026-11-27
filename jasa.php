<?php

namespace pbo\Marketplace;

require_once('./property-constant.php');

use pbo\Marketplace\Produk;

class jasa {
    use produk;
    
    public function payment($tipe){
        return match($tipe){
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "pembayaran hanya bisa va dan qris"

        };
    }
}