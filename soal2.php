<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Soal 2</h1>

    <?php
    $jumlah_uang = 1387500;

    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
    $jumlah_pecahan = array();

    foreach ($pecahan as $nilai) {
        $jumlah_pecahan[$nilai] = floor($jumlah_uang / $nilai);
        $jumlah_uang %= $nilai;
    }

    foreach ($jumlah_pecahan as $nilai => $jumlah) {
        echo "Jumlah uang pecahan Rp. " . number_format($nilai, 0, ',', '.') . " : " . $jumlah . " lembar <br>";
    }

    ?>
</body>
</html>