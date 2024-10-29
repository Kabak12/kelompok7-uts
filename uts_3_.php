<!-- Nama anggota:
    1.Abdul Mubarok
    2.Ahmad yusuf
    3.Nabilatul fadliah -->

     

    <?php
$products = [
    ["id" => 1, "name" => "Minyak Telon", "stock" => 20, "price" => 31790],
    ["id" => 2, "name" => "Diapers", "stock" => 25, "price" => 51880],
    ["id" => 3, "name" => "Baby Oil", "stock" => 15, "price" => 16780],
    ["id" => 4, "name" => "Shampo Baby", "stock" => 20, "price" => 20670],
    ["id" => 5, "name" => "Bedak", "stock" => 15, "price" => 15890],
    ["id" => 6, "name" => "Baju Bayi", "stock" => 20, "price" => 35500],
    ["id" => 7, "name" => "Jumper", "stock" => 25, "price" => 50999]
];

$grandTotal = 0;

echo "<table border='5'>";
echo "<tr><th>NO</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

foreach ($products as $product) {   
    $jumlah = $product['stock'] * $product['price'];
    $grandTotal += $jumlah;

    echo "<tr>";
    echo "<td>{$product['id']}</td>";
    echo "<td>{$product['name']}</td>";
    echo "<td>{$product['stock']}</td>";
    echo "<td>{$product['price']}</td>";
    echo "<td>{$jumlah}</td>";
    echo "</tr>";
}

echo "<tr><td colspan='4'>Total</td><td>{$grandTotal}</td></tr>";
echo "</table>";
?>
