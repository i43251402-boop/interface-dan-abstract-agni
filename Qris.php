<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

#Penggunaan Class QRIS
class QRIS extends Pembayaran implements Cetak {

    public function __construct($jumlah) {
        parent::__construct($jumlah);
    }

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Pembayaran QRIS Rp {$this->jumlah} berhasil";
        }        
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk QRIS: Rp {$this->jumlah}";
    }
}
?>
