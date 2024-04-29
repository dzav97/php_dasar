<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Latihan Perulangan</h1>

    <?php
    // Menentukan jumlah baris bintang
    $jumlahBaris = 10;

    // Menggunakan perulangan untuk mencetak bintang
    for ($i = 1; $i <= $jumlahBaris; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    ?>
</body>
</html>