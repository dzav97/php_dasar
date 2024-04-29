<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konversi</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307043">
    <meta name="viewport" content="Diaz Azkha Varissa">
</head>
<body>
    <h1>Konversi Nilai</h1>

    <?php
    function convertToGrade($value) {
        if ($value >= 90 && $value <= 100) {
            return 'A';
        } elseif ($value >= 80 && $value < 90) {
            return 'AB';
        } elseif ($value >= 70 && $value < 80) {
            return 'B';
        } elseif ($value >= 60 && $value < 70) {
            return 'BC';
        } elseif ($value >= 0 && $value < 60) {
            return 'C';
        } else {
            return 'Invalid value';
        }
    }

    $nilaiAngka = 85; // masukkan nilai yang ingin di konversi
    $hasilKonversi = convertToGrade($nilaiAngka);
    echo "Nilai angka {$nilaiAngka} adalah huruf {$hasilKonversi}";

    ?>
</body>
</html>