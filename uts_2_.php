<!-- Nama anggota:
    1.Abdul Mubarok
    2.Ahmad yusuf
    3.Nabilatul fadliah -->

<?php

$barang = [
    ['nama' => 'Minyak Telon', 'stok' => 20, 'harga' => 31790],
    ['nama' => 'Diapers', 'stok' => 25, 'harga' => 51880],
    ['nama' => 'Baby Oil', 'stok' => 15, 'harga' => 16780],
    ['nama' => 'Shampo Baby', 'stok' => 20, 'harga' => 20670],
    ['nama' => 'Bedak', 'stok' => 20, 'harga' => 15890],
    ['nama' => 'Baju Bayi', 'stok' => 15, 'harga' => 35500],
    ['nama' => 'Jumper', 'stok' => 25, 'harga' => 50999]
];

$transaksi = [
    ['nama' => 'Baju Bayi', 'jumlah_terjual' => 7],
    ['nama' => 'Diapers', 'jumlah_terjual' => 20],
    ['nama' => 'Bedak', 'jumlah_terjual' => 11],
    ['nama' => 'Minyak Telon', 'jumlah_terjual' => 17],
    ['nama' => 'Baby Oil', 'jumlah_terjual' => 7]
];

$total_pembelian = 0;
$diskon = 0; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; }
        h1, h2, p { text-align: center; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        .total, .diskon, .bayar { font-weight: bold; }
        .text-right { text-align: right; }
    </style>
</head>
<body>

<div class="container">
    <h1>Struk Pembayaran</h1>
    <p><strong>Tanggal:</strong> 29 Oktober 2024</p>
    <table>
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi as $t): ?>
                <?php
                foreach ($barang as $b) {
                    if ($b['nama'] === $t['nama']) {
                        $harga = $b['harga'];
                        break;
                    }
                }
                $subtotal = $harga * $t['jumlah_terjual'];
                $total_pembelian += $subtotal;
                ?>
                <tr>
                    <td><?php echo $t['nama']; ?></td>
                    <td>Rp <?php echo number_format($harga, 0, ',', '.'); ?></td>
                    <td><?php echo $t['jumlah_terjual']; ?></td>
                    <td>Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php 

    if ($total_pembelian >= 300000) {
        $diskon = 0.20; 
    } elseif ($total_pembelian >= 200000) {
        $diskon = 0.10; 
    }

    $discountAmount = $total_pembelian * $diskon;
    $finalTotal = $total_pembelian - $discountAmount;
    ?>

    <table style="margin-top: 20px;">
        <tr>
            <td class="text-right total">Total Pembelian:</td>
            <td class="text-right">Rp <?php echo number_format($total_pembelian, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td class="text-right diskon">Diskon <?php echo $diskon * 100; ?>%:</td>
            <td class="text-right">Rp <?php echo number_format($discountAmount, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td class="text-right bayar">Total Pembayaran:</td>
            <td class="text-right">Rp <?php echo number_format($finalTotal, 0, ',', '.'); ?></td>
        </tr>
    </table>

    <p>Terima kasih atas pembelian Anda!</p>
</div>

</body>
</html>
