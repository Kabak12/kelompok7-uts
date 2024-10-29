<!-- Nama anggota
    1.Abdul Mubarok
    2.Ahmad yusuf
    3.Nabilatul fadliah -->

    <?php
$product1_id = 1;
$product1_name = "Minyak Telon";
$product1_stock = 20;
$product1_price = 31790;

$product2_id = 2;
$product2_name = "Diapers";
$product2_stock = 25;
$product2_price = 51880;

$product3_id = 3;
$product3_name = "Baby Oil";
$product3_stock = 15;
$product3_price = 16780;

$product4_id = 4;
$product4_name = "Shampo Baby";
$product4_stock = 20;
$product4_price = 20670;

$product5_id = 5;
$product5_name = "Bedak";
$product5_stock = 15;
$product5_price = 15890;

$product6_id = 6;
$product6_name = "Baju Bayi";
$product6_stock = 20;
$product6_price = 35500;

$product7_id = 7;
$product7_name = "Jumper";
$product7_stock = 25;
$product7_price = 50999;

$grandTotal = 0;

echo "<table border='0'>";
echo "<tr><th>NO</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

$products = [
    [$product1_id, $product1_name, $product1_stock, $product1_price],
    [$product2_id, $product2_name, $product2_stock, $product2_price],
    [$product3_id, $product3_name, $product3_stock, $product3_price],
    [$product4_id, $product4_name, $product4_stock, $product4_price],
    [$product5_id, $product5_name, $product5_stock, $product5_price],
    [$product6_id, $product6_name, $product6_stock, $product6_price],
    [$product7_id, $product7_name, $product7_stock, $product7_price]
];

foreach ($products as $product) {
    list($id, $name, $stock, $price) = $product;
    $jumlah = $stock * $price;
    $grandTotal += $jumlah;

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$name}</td>";
    echo "<td>{$stock}</td>";
    echo "<td>{$price}</td>";
    echo "<td>{$jumlah}</td>";
    echo "</tr>";
}

echo "<tr><td colspan='4'>Total</td><td>{$grandTotal}</td></tr>";
echo "</table>";
?>


