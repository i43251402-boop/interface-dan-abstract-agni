<?php
abstract class Pembayaran {
    protected $jumlah;
    protected $diskon = 0.1; // 10%
    protected $pajak = 0.11; // 11%

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    abstract public function prosesPembayaran();

    public function validasi() {
        return $this->jumlah > 0;
    }

    public function hitungDiskon() {
        return $this->jumlah * $this->diskon;
    }

    public function hitungPajak() {
        $setelahDiskon = $this->jumlah - $this->hitungDiskon();
        return $setelahDiskon * $this->pajak;
    }

    public function hitungTotal() {
        return $this->jumlah - $this->hitungDiskon() + $this->hitungPajak();
    }
}
?>