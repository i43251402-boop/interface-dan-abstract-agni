<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

#Penggunaan Class Ewallet
class EWallet extends Pembayaran implements Cetak {

    public function __construct($jumlah) {
        parent::__construct($jumlah);
    }

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Pembayaran E-Wallet Rp {$this->jumlah} berhasil";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk E-Wallet: Rp {$this->jumlah}";
    }
}
?>