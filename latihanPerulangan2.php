<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Latihan Perulangan 2</h1>

    <?php
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    foreach ($angka as $nilai) {
        if ($nilai % 2 == 0) {
            echo "Nomor :"  .$nilai . " adalah genap.<br>";
        } else {
            echo "Nomor :"  .$nilai . " adalah ganjil.<br>";
        }
    }

    ?>
</body>
</html>