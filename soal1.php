<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Soal 1</h1>

    <?php
    $gaji_pokok = 3250000;
    $tunjangan = 1200000;
    $pajak = 0.10;

    $gaji_kotor = $gaji_pokok + $tunjangan;
    $pajak_penghasilan = $gaji_kotor * $pajak;
    $gaji_bersih = $gaji_kotor - $pajak_penghasilan;

    echo "Gaji Bersih yang diterima Obi setiap bulannya adalah: Rp. " . number_format($gaji_bersih, 0, ',', '.');

    ?>
</body>
</html>