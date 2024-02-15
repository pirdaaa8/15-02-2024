<?php 

$produk = [
    [
        "no" => 1,
        "nama produk" => "Sepatu NIKE Black Edition 115",
        "harga" => 5000000,
        "foto" => "produk1.jpg",
        "stok" => 50,
        "status" => "<span style='color:green'> Tersedia</span>"
    ],
    [
        "no" => 2,
        "nama produk" => "Sepatu Adidas White Edition 225",
        "harga" => 6000000,
        "foto" => "produk2.jpg",
        "stok" => 0,
        "status" => "<span style='color:red'> Tidak Tersedia</span>"
        
    ]
    ];
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>
<body>
    <h1>MInwoo Store | Sepatu murah dan terjagkau </h1>
    <h5>Data Produk</h5>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>status</th>
        </tr>
        <?php foreach($produk as $data) : ?>
        <tr>
            <td><?= $data["no"]; ?></td>
            <td><?= $data["nama produk"]; ?></td>
            <td><?= $data["harga"];?></td>
            <td><img src="<?= $data["foto"]; ?>" alt="" width="80" height="60"></td>
            <td><?= $data["stok"]; ?></td>
            <td><?= $data["status"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>