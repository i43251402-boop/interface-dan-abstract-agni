<?php
require_once 'TransferBank.php';
require_once 'EWallet.php';
require_once 'QRIS.php';
require_once 'COD.php';
require_once 'VirtualAccount.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Struk 💖</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $jumlah = $_POST['jumlah'];
        $metode = $_POST['metode'];

        if ($metode == "transfer") {
            $obj = new TransferBank($jumlah);
        } elseif ($metode == "ewallet") {
            $obj = new EWallet($jumlah);
        } elseif ($metode == "qris") {
            $obj = new QRIS($jumlah);
        } elseif ($metode == "cod") {
            $obj = new COD($jumlah);
        } else {
            $obj = new VirtualAccount($jumlah);
        }

        echo $obj->prosesPembayaran() . "<br><br>";
        echo $obj->cetakStruk() . "<br><br>";

        echo "Jumlah: Rp " . $jumlah . "<br>";
        echo "Diskon (10%): Rp " . $obj->hitungDiskon() . "<br>";
        echo "Pajak (11%): Rp " . $obj->hitungPajak() . "<br>";
        echo "<strong>Total Bayar: Rp " . $obj->hitungTotal() . "</strong>";
    }
    ?>

    <br><br>
    <a href="form.html">⬅ Kembali</a>
</div>

</body>
</html>