<?php
require_once 'TransferBank.php';
require_once 'EWallet.php';
require_once 'QRIS.php';

// objek
$transfer = new TransferBank(100000);
$ewallet = new EWallet(50000);
$qris = new QRIS(75000);
$cod = new COD(65000) ;
$virtual account = new Virtual Account(150000)

// output
echo $transfer->prosesPembayaran();
echo "<br>";
echo $transfer->cetakStruk();

echo "<hr>";

echo $ewallet->prosesPembayaran();
echo "<br>";
echo $ewallet->cetakStruk();

echo "<hr>";

echo $qris->prosesPembayaran();
echo "<br>";
echo $qris->cetakStruk();

echo "<hr>";

echo $cod->prosesPembayaran();
echo "<br>";
echo $cod->cetakStruk();

echo "<hr>";

echo $virtual account->prosesPembayaran();
echo "<br>";
echo $virtual account->cetakStruk();
?>
